<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $medecinee =new Category();
        $medecinee->setName("medecine esthétique");
        $medecinee->setContent("abcd");
        $medecinee->setThumbnail("http://placehold.it/90x90");
        $manager->persist($medecinee);
        $this->addreference("médecine esthétique", $medecinee);

        $chirurgiev =new Category();
        $chirurgiev->setName("chirurgie visage");
        $chirurgiev->setContent("abcd");
        $chirurgiev->setThumbnail("http://placehold.it/90x90");
        $manager->persist($chirurgiev);
        $this->addreference("chirurgie visage", $chirurgiev);

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
        $chirurgiec->setName("chirurgie des cancers cutanés");
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

        $manager->flush();
    }

}
