<?php

namespace App\Controller\Dashboard;

use App\Repository\ContainerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/dashboard/pantry", name="dashboard_pantry_")
     */
class PantryController extends AbstractController
{
   
    /**
     * @Route("/", name="browse", methods={"GET"})
     */
    public function browse(ContainerRepository $containerRepository): Response
    {
        

        

        $user = $this->getUser();

        $container = $containerRepository->findOneBy(array('type' => 'pantry'));

        $userContainer = $containerRepository->findOneBy(array('user' => $user));


        if ($userContainer){
            $products_list = $userContainer->getProducts();
        } else {
            $products_list = array(); 
        }
        
        


        return $this->render('dashboard/pantry/index.html.twig', [
            'container'=> $container,
            'userContainer' => $userContainer,
            'products_list' => $products_list
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
