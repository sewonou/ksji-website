<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('slimer/admin/index.html.twig', [

        ]);
    }

    /**
     * @return Response
     */
    #[Route('/admin/menu', name: 'app_menu')]
    public function menu(): Response
    {
        return $this->render('slimer/admin/menu.html.twig', [
            'page' => 'Menu',
        ]);
    }
}
