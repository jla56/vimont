<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Faq;
use App\Entity\Intervention;
use App\Entity\News;
use App\Entity\Picture;
use App\Entity\Practitioner;
use App\Repository\CategoryRepository;
use App\Repository\InterventionRepository;
use App\Repository\NewsRepository;
use App\Repository\PictureRepository;
use App\Repository\PractitionerRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    //declaration des propriétés
    protected $categoryRepository;
    protected $interventionRepository;
    protected $newsRepository;
    protected $pictureRepository;
    protected $practitionerRepository;


    public function __construct(
        //récupération des entités
        CategoryRepository $categoryRepository,
        InterventionRepository $interventionRepository,
        NewsRepository $newsRepository,
        PictureRepository $pictureRepository,
        PractitionerRepository $practitionerRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->interventionRepository = $interventionRepository;
        $this->newsRepository = $newsRepository;
        $this->pictureRepository = $pictureRepository;
        $this->practitionerRepository = $practitionerRepository;
    }

    /**
     * @Route("/admin", name="admin")...
     * @return Response
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuilder->setController(CategoryCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Cabinet Esthetique');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Tableau de bord', '');
        yield MenuItem::linkToCrud('Category', 'fa fa-home', Category::class);
        yield MenuItem::linktoCrud('Interventions','fa fa-home', Intervention::class);
        yield MenuItem::linktoCrud('News','fa fa-home', News::class);
        yield MenuItem::linkToCrud('Faq', 'fa fa-home', Faq::class);
        yield MenuItem::linkToCrud('Picture', 'fa fa-home', Picture::class);
        yield MenuItem::linkToCrud('Practitioner', 'fa fa-home', Practitioner::class);

    }
}
