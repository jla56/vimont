<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InterventionController extends AbstractController
{

    /**
     * @Route("/index", name="index")
     */
    public function index()
    {

        return $this->render('intervention/index.html.twig', [
            'controller_name' => 'InterventionController',
        ]);
    }

    /**
     * @Route("/intervention", name="intervention")
     */
    public function intervention()
    {
        return $this->render('intervention/intervention.html.twig', [
        ]);
    }

    /**
     * @Route("/medecine_esthetique", name="medecine_esthetique")
     */
    public function medecine_esthetique(){
        return $this->render('intervention/medecine_esthetique.html.twig');
    }

    /**
     * @Route("/chirurgiev", name="chirurgiev")
     */
    public function chirurgiev(){
        return $this->render('intervention/chirurgiev.html.twig');
    }

    /**
     * @Route("/chirurgies", name="chirurgies")
     */
    public function chirurgies(){
        return $this->render('intervention/chirurgies.hml.twig');
    }

    /**
     * @Route("/chirurgiem", name="chirurgiem")
     */
    public function chirurgiem(){
        return $this->render('intervention/chirurgiem.html.twig');
    }

    /**
     * @Route("/chirurgiecc", name="chirurgiecc")
     */
    public function chirurgiecc(){
        return $this->render('intervention/chirurgiecc.html.twig');
    }

    /**
     * @Route("/reconstructionm", name="reconstructionm")
     */
    public function reconsructionm(){
        return $this->render('intervention/reconstructionm.html.twig');
    }


}
