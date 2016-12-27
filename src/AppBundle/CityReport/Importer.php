<?php

namespace AppBundle\CityReport;

use AppBundle\Entity\City;
use AppBundle\Entity\CityReport;
use AppBundle\Entity\ReportInterface;
use AppBundle\Services\Scraper;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use AppBundle\Services\Importer as Base;

class Importer extends Base
{

    /**
     * @var Scraper
     */
    protected $scraper;

    /**
     * @var CityReportParser
     */
    protected $cityReportParser;

    /**
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * Importer constructor.
     * @param Scraper $scraper
     * @param CityReportParser $cityReportParser
     * @param ValidatorInterface $validator
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(Scraper $scraper, CityReportParser $cityReportParser, ValidatorInterface $validator, EntityManagerInterface $entityManager)
    {
        $this->scraper = $scraper;
        $this->cityReportParser = $cityReportParser;
        $this->validator = $validator;
        $this->entityManager = $entityManager;
    }

    public function doImport(ReportInterface $report, ImportResult $result)
    {
        // set the city relationship
        $repo = $this->entityManager->getRepository(City::class);

        /** @var CityReport $report */
        $cityName = $report->city;
        $city = $repo->findOneByName($cityName);
        $report->city = $city;

        // persist
        if ($city instanceof City) {
            $this->entityManager->persist($report);
            $this->entityManager->flush();
        } else {
            $result->addError("City \"$cityName\" does not exist in database.");
        }
    }




}