<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PictureController extends AbstractController
{

    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('picture/index.html.twig', [
            'controller_name' => 'PictureController',
        ]);
    }

    /**
     * @Route("/picture", name="picture")
     */
    public function picture()
    {
        return $this->render('picture/picture.html.twig', [
            'controller_name' => 'PictureController',
        ]);
    }
}
