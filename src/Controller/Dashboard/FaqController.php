<?php

namespace App\Controller\Dashboard;

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
    public function index(): Response
    {
          

       


        return $this->render('dashboard/faq/index.html.twig', [
            'controller_name' => 'FaqController',
        
        ]);
    }
}
