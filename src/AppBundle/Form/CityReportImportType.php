<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;

class CityReportImportType extends ReportImportType
{

    protected $fileMimeTypes = [
        "application/pdf",
        "application/x-pdf",
    ];

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('upload', FileType::class, [
                'label' => 'PDF or Zipped PDF\'s',
                'constraints' => new File([
                    'mimeTypes' => $this->getMimeTypes()
                ])
            ]);
    }

}