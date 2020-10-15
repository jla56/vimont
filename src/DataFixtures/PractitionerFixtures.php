<?php

namespace App\DataFixtures;

use App\Entity\Practitioner;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PractitionerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $practitioner1 = new Practitioner();
        $practitioner1->setFirstName("Thibault");
        $practitioner1->setLastName("Vimont");
        $practitioner1->setPicture("http://placehold.it/90x90");
        $practitioner1->setContent("Chirurgien esthétique");
        $manager->persist($practitioner1);
        $this->addReference("thibault-vimont", $practitioner1);

        $manager->flush();
    }
}
