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

    #[Route('/event/{id}', name: 'app_event_single')]
    public function event_single():Response
    {
        return $this->render('website/home/event_single.html.twig',[

        ]);
    }

    #[Route('/gallery', name: 'app_gallery')]
    public function gallery():Response
    {
        return $this->render('website/home/gallery.html.twig',[

        ]);
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog():Response
    {
        return $this->render('website/home/blog.html.twig',[

        ]);
    }

    #[Route('/blog/{id}', name: 'app_blog_single')]
    public function blog_single():Response
    {
        return $this->render('website/home/blog_single.html.twig',[

        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact():Response
    {
        return $this->render('website/home/contact.html.twig',[

        ]);
    }
}
