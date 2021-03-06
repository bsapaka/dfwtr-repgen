<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\DataFixtures\SubdivisionsFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadLewisvilleSubdivisionsData extends SubdivisionsFixture
{

    protected $subs = [
        'Carrington Village',
        'Castle Hills',
        'Creek Haven',
        'Creekview Village',
        'Diamond Hill',
        'Enclaves at Silver Creek',
        'Garden Oak Estates',
        'Garden Park Place',
        'Garden Ridge',
        'Hedrick Estates',
        'Hidden Cove',
        'Highland Lakes',
        'Indian Oaks',
        'Meadow Glen',
        'Orchard Hill',
        'Orchard Valley',
        'Park Ridge Estates',
        'Park Valley',
        'Pebble Ridge Estates',
        'Rockbrook',
        'Southridge',
        'Summit Ridge',
        'Sylvan Creek',
        'Timberbrook',
        'Timbercreek Estate',
        'Timber Hill',
        'Timber Valley',
        'Valley Vista',
        'Vista Ridge Estates',
        'Water Oak Estates',
        'Whispering Oaks',
        'Willow Grove'
    ];

    function getCityName()
    {
        return "Lewisville";
    }

}