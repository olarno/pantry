<?php

namespace App\Controller\Dashboard;

use App\Repository\FaqRepository;
use App\Repository\ProductRepository;
use App\Repository\ContainerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;


/**
* @Route("/dashboard/faq", name="dashboard_faq_")
*/
class FaqController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param FaqRepository $faqRepository
     * @param SerializerInterface $serializer
     * @return Response
     */
    public function index(FaqRepository $faqRepository , SerializerInterface $serializer): Response
    {
          

       $faq = $faqRepository->findAll();
        $faq = $serializer->serialize($faq , 'json');

        return $this->render('dashboard/faq/index.html.twig', [
            'controller_name' => 'FaqController',
            'questions' => $faq,

        ]);
    }
}
