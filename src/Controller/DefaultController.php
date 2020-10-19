<?php

namespace App\Controller;


use App\Entity\Category;
use App\Entity\News;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */

    public function home(CategoryRepository $categoryRepository){

        $categories = $categoryRepository->findAll();

        return $this->render('default/home.html.twig', [
            'categories'=> $categoryRepository->findAll()
        ]);
    }

    /**
     * @Route("/default/1", name="default_show")
     */
    public function show(News $news){
        return $this->render('default/show.html.twig',[
            'news'=>$news
        ]);
    }



    public function mainMenu(CategoryRepository $categoryRepository)
    {
        return $this->render('default/_menu.html.twig',[
                'categories'=> $categoryRepository->findAll()

            ]);
    }


}
