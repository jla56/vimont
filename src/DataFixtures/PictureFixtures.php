<?php

namespace App\DataFixtures;

use\App\Entity\Picture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PictureFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $picture = new Picture();
        $picture->setName("Nom de la photo");
        $picture->setThumbnail("sepia_femme.jpg");
        $picture->setIntervention($this->getReference("toxine botulique"));
        $manager->persist($picture);

        $manager->flush();
    }

    /**
     * @return mixed
     */
    public function getDependencies()
    {
        return [InterventionFixtures::class];
    }
}

