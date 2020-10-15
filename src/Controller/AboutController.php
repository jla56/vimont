<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AboutController extends AbstractController
{

    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('about/index.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('about/about.html.twig', [

        ]);
    }

    /**
     * @Route("/philosophy", name="philosophy")
     */
    public function philosophy(){
        return $this->render('about/philosophy.html.twig');
    }

    /**
     * @Route("/office", name="office")
     */
    public function office(){
        return $this->render('about/office.html.twig');
    }

}
