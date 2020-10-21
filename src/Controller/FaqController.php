<?php

namespace App\Controller;

use App\Entity\Faq;
use App\Form\FaqType;
use App\Repository\FaqRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/faq")
 */
class FaqController extends AbstractController
{

    /**
     * @Route("/", name="faq_index", methods={"GET","POST"})
     */
    public function index(Request $request, FaqRepository $faqRepository): Response
    {
        $faq = new Faq();
        $form = $this->createForm(FaqType::class, $faq);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $faq->setDisplay(false);
            $entityManager->persist($faq);
            $entityManager->flush();


            return $this->redirectToRoute('faq_index');
        }

        return $this->render('faq/index.html.twig', [
            'faqs' => $faqRepository->findByDisplay(true),
            'faq' => $faq,
            'form' => $form->createView(),
        ]);
    }

}
