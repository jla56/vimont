<?php

namespace App\DataFixtures;

use App\Entity\Intervention;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class InterventionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $intervention = new Intervention();
        $intervention->setTitle("Toxine Botulique");
        $intervention->setContent("la toxine botulique");
        $intervention->setCreatedAt(new\DateTime());
        $intervention->setCategory($this->getReference("médecine_esthétique"));
        $intervention->setPractitioner($this->getReference("thibault-vimont"));
        $manager->persist($intervention);
        $this->addReference("toxine-botulique", $intervention);

        $manager->flush();
    }
    public function getDependencies()
    {
        return [CategoryFixtures::class, PractitionerFixtures::class];
    }
}
