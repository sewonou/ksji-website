<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminGeneralController extends AbstractController
{
    #[Route('/admin/general', name: 'app_admin_general')]
    public function index(): Response
    {
        return $this->render('admin/general/index.html.twig', [

        ]);
    }
}
