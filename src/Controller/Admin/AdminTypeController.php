<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminTypeController extends AbstractController
{
    #[Route('/admin/type', name: 'app_admin_type')]
    public function index(): Response
    {
        return $this->render('admin_type/index.html.twig', [
            'controller_name' => 'AdminTypeController',
        ]);
    }
}
