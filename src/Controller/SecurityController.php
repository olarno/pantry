<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Container;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/registration", name="security_registration")
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param UserPasswordEncoderInterface $encoder
     * @return RedirectResponse|Response
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){

        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            
            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            $manager->persist($user);

            $containerFridge = new Container();
            $containerFridge->setName('Mon frigo');
            $containerFridge->setType('fridge');
            $containerFridge->setUser($user->getId());

            $manager->persist($containerFridge);


            $containerShoplist = new Container();
            $containerShoplist->setName('Ma liste de courses');
            $containerShoplist->setType('shoplist');
            $containerShoplist->setUser($user->getId());

            $manager->persist($containerShoplist);

            $containerPantry = new Container();
            $containerPantry->setName('Mon garde manger');
            $containerPantry->setType('pantry');
            $containerPantry->setUser($user->getId());

            $manager->persist($containerPantry);



            $manager->flush();

            return $this->redirectToRoute('security_login');
        }



        return $this->render('security/registration.html.twig',[
            'form' => $form->createView()
        ]);

    }


    /**
     * @Route("/login", name="security_login", methods={"POST"})
     * @param AuthenticationUtils $authUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();

        return $this->json([
            'error'         => $error,
        ],
            200,
            [],
            [
                'groups' => ['login'],
            ]
        );

    }

    /**
     *@Route("/logout", name="security_logout")
     */
    public function logout(){
        
    }

}
