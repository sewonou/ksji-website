<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPostController extends AbstractController
{
    #[Route('/admin/post', name: 'app_admin_post')]
    public function index(): Response
    {
        return $this->render('admin_post/index.html.twig', [
            'controller_name' => 'AdminPostController',
        ]);
    }
}
