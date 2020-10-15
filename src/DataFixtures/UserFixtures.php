<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $admin = new User();
        $admin->setRoles(["ROLE_ADMIN"]);
        $admin->setEmail("tj.vimont@gmail.com");
        $admin->setPassword($this->encoder->encodePassword($admin, "tcvimont"));
        $manager->persist($admin);
        $this->addReference("admin-thibault", $admin);

        $user = new User();
        $user->setEmail("lespolasdadelia@gmail.com");
        $user->setPassword($this->encoder->encodePassword($user, "adelia"));
        $manager->persist($user);
        $this->addReference("user-julia", $user);

        $manager->flush();
    }

}
