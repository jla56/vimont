<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $medecinee =new Category();
        $medecinee->setName("medecine esthétique");
        $medecinee->setContent("abcd");
        $medecinee->setThumbnailFile("http://placehold.it/90x90");
        $manager->persist($medecinee);
        $this->addreference("médecine esthétique", $medecinee);

        $chirurgiev =new Category();
        $chirurgiev->setName("chirurgie visage");
        $chirurgiev->setContent("abcd");
        $chirurgiev->setThumbnailFile("http://placehold.it/90x90");
        $manager->persist($chirurgiev);
        $this->addreference("chirurgie_visage", $chirurgiev);

        $chirurgies =new Category();
        $chirurgies->setName("chirurgie de la silhouette");
        $chirurgies->setContent("abcd");
        $chirurgies->setThumbnail("http://placehold.it/90x90");
        $manager->persist($chirurgies);
        $this->addreference("chirurgie de la silhouette", $chirurgies);

        $chirurgiem =new Category();
        $chirurgiem->setName("chirurgie mammaire");
        $chirurgiem->setContent("abcd");
        $chirurgiem->setThumbnail("http://placehold.it/90x90");
        $manager->persist($chirurgiem);
        $this->addreference("chirurgie mammaire", $chirurgiem);

        $chirurgiec =new Category();
        $chirurgiec->setName("chirurgie_des cancers_cutanés");
        $chirurgiec->setContent("abcd");
        $chirurgiec->setThumbnail("http://placehold.it/90x90");
        $manager->persist($chirurgiec);
        $this->addreference("chirurgie des cancers cutanés", $chirurgiec);

        $reconstructionm =new Category();
        $reconstructionm->setName("reconstruction mammaire");
        $reconstructionm->setContent("abcd");
        $reconstructionm->setThumbnail("http://placehold.it/90x90");
        $manager->persist($reconstructionm);
        $this->addreference("reconstruction mammaire", $reconstructionm);
/*
        $injectiona = new Category();
        $injectiona->setName("acide_hyaluronique");
        $injectiona->setPrice(250);
        $injectiona->setContent("viendra combler les ridules");
        $injectiona->setPicture("http://placehold.it/90x90");
        $injectiona->setCategory($this->getReference("médecine_esthétique"));
        $manager->persist($injectiona);

        $otoplastie = new Category();
        $otoplastie ->setName("otoplastie");
        $otoplastie ->setPrice(500);
        $otoplastie ->setContent("recoller les oreilles");
        $otoplastie ->setPicture("\"http://placehold.it/90x90\"");
        $otoplastie ->setCategory($this->getReference("chirurgie_visage"));
        $manager->persist($otoplastie);

        $abdominoplastie = new Category();
        $abdominoplastie ->setName("abdominoplastie ");
        $abdominoplastie ->setPrice(600);
        $abdominoplastie ->setContent("perte en tour de taille");
        $abdominoplastie ->setPicture("\"http://placehold.it/90x90\"");
        $abdominoplastie ->setCategory($this->getReference("chirurgie_de_la_silhouette"));
        $manager->persist($abdominoplastie);

        $augmentationm = new Category();
        $augmentationm->setName("augmentation mammaire");
        $augmentationm->setPrice(1100);
        $augmentationm->setContent("");
        $augmentationm->setPicture("\"http://placehold.it/90x90\"");
        $augmentationm->setCategory($this->getReference("chirurgie_mammaire"));
        $manager->persist($augmentationm);
*/
        $manager->flush();
    }

    /**
     * @return mixed
     */
    public function getDependencies()
    {

    }
}
