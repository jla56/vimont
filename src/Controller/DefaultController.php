<?php

namespace App\Controller;


use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home(){

        return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/default/1", name="default_show")
     */
    public function show(News $news){
        return $this->render('default/show.html.twig',[
            'news'=>$news
        ]);
    }

}
