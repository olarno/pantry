<?php

namespace App\Controller\Dashboard;

use App\Repository\ContainerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/dashboard/shoplist", name="dashboard_shoplist_")
     */
class ShoplistController extends AbstractController
{

    /**
     * @Route("/", name="browse", methods={"GET"})
     */
    public function browse(ContainerRepository $containerRepository): Response
    {
        

        

        $user = $this->getUser();
        dump($user);
        $container = $containerRepository->findOneBy(array('type' => 'shoplist'));
        dump($container);
        $userContainer = $containerRepository->find(array('user' => $user));
        dump($userContainer);

        if ($userContainer){
            $products_list = $userContainer->getProduct();
        } else {
            $products_list = array(); 
        }
        
        


        return $this->render('dashboard/shoplist/index.html.twig', [
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
