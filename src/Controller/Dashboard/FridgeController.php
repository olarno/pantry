<?php

namespace App\Controller\Dashboard;

use App\Repository\ProductRepository;
use App\Repository\ContainerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
* @Route("/dashboard/fridge", name="dashboard_fridge_")
*/
class FridgeController extends AbstractController
{
    /**
     * @Route("/", name="browse", methods={"GET"})
     */
    public function browse(ContainerRepository $containerRepository, ProductRepository $productRepository): Response
    {
        

        

        $user = $this->getUser();

        $container = $containerRepository->findOneBy(array('type' => 'fridge'));
        
        $productList = $productRepository->findByUserAndContainer($user, $container);
        // if ($userContainer){
        //     $products_list = $userContainer->getProduct();
        // } else {
        //     $products_list = array(); 
        // }
        
        
        


        return $this->render('dashboard/fridge/index.html.twig', [
            'controller_name' => 'FridgeController',
            'container'=> $container,
            'products_list' => $productList
        ]);
    }


     /**
     * @Route("/{id}", name="read", requirements={"id": "\d+"},  methods={"GET"})
     */
    public function read()
    {


    }

     /**
     * @Route("/{id}", name="edit", methods={"PATCH"}, requirements={"id": "\d+"})
     *
     */
    public function edit()
    {


    }

    /**
     * @Route("/", name="add", methods={"POST"})
     */
    public function add()
    {


    }

    /**
     * @Route("/{id}", name="delete", requirements={"id": "\d+"}, methods={"DELETE"})
     */
    public function delete()
    {


    }
}
