<?php

namespace App\Controller\Dashboard;

use App\Repository\FaqRepository;
use App\Repository\ProductRepository;
use App\Repository\ContainerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
* @Route("/dashboard/faq", name="dashboard_faq_")
*/
class FaqController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(FaqRepository $faqRepository): Response
    {
          

       $faq = $faqRepository->findOneBy(array('id' => 1));

       $faqarray = $faqRepository->findAll();

        return $this->render('dashboard/faq/index.html.twig', [
            'controller_name' => 'FaqController',
            'faq' => $faq,
            'faqarray' => json_encode($faqarray)
        ]);
    }
}
