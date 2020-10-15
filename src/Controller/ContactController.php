<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact/contact.html.twig', [

        ]);
    }
}
