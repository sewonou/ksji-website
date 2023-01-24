<?php

namespace App\Controller\Website;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('website/home/index.html.twig', [

        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('website/home/about.html.twig', [

        ]);
    }

    #[Route('/event', name: 'app_event')]
    public function event():Response
    {
        return $this->render('website/home/event.html.twig', [

        ]);
    }

    #[Route('/event-detail', name: 'app_event_detail')]
    public function event_detail():Response
    {
        return $this->render('website/home/event_single.html.twig',[

        ]);
    }
}
