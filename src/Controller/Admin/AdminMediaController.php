<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminMediaController extends AbstractController
{
    #[Route('/admin/media', name: 'app_admin_media')]
    public function index(): Response
    {
        return $this->render('admin/media/index.html.twig', [

        ]);
    }
}
