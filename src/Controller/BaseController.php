<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/{vueRouting}", name="home")
     * @param Request $request
     * @param null|string $vueRouting
     * @return Response
     */
    public function indexAction(Request $request,?string $vueRouting = null): Response
    {
        return $this->render('base.html.twig', [
            'vueRouting' => \is_null($vueRouting) ? '/' : '/' . $vueRouting,
            'queryParameters' => \json_encode($request->query->all()),
        ]);
    }

}
