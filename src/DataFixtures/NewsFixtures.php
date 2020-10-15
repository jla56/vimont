<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\News;

class NewsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $news = new News();
            $news->setTitle("Titre de l'article n°$i");
            $news->setContent("<p>Contenu de l'article n°$i</p>");
            $news->setPicture("http://placehold.it/350x150");
            $news->setCreatedAt(new \DateTime());

            $manager->persist($news);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [InterventionFixtures::class];
    }
}
