<?php

namespace App\DataFixtures;

use App\Entity\Faq;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class FaqFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i =  1; $i <= 10; $i++){
            $question1 = new Faq();
            $question1->setQuestion("peut-on faire une réaction à l'acide hyaluronique");
            $question1->setResponse("nous avons toujours une phase de test avant application");
            $question1->setCreatedAt(new \DateTime());
            $question1->setEmail("lespolasdadelia@gmail.com");
            $question1->setDisplay(true);
            $question1->setPseudo("Adelia");
            $question1->setCategory($this->getReference("médecine_esthétique"));
            $manager->persist($question1);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }
}

