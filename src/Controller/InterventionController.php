<?php

namespace App\Controller;



use App\Entity\Intervention;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/create/{id}/show", name="intervention_show", methods={"GET"})
     */
    public function show(Intervention $intervention):Response
    {
        return $this->render('intervention/show.html.twig', [
            'intervention'=>$intervention,

        ]);
    }




}
