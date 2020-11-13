<?php

namespace App\Controller\Dashboard;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
* @Route("/dashboard/product", name="dashboard_product")
*/
class ProductController extends AbstractController
{
   
     /**
     * @Route("/add", name="add", methods={"GET","POST"})
     */
    public function add(Request $request, EntityManagerInterface $manager)
    {   
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $product = $form->getData();


            $manager->persist($product);


            $manager->flush();

        };


        return $this->render('dashboard/product/index.html.twig', [
            'controller_name' => 'ProductController',
            'form' => $form->CreateView()
        ]);

    }

}
