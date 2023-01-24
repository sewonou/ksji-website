<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminAccountController extends AbstractController
{
    #[Route('/admin/account', name: 'app_admin_account')]
    public function index(): Response
    {
        return $this->render('admin_account/index.html.twig', [
            'controller_name' => 'AdminAccountController',
        ]);
    }
}
