<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }
    #[Route('/turbo/welcome', name: 'app_home_page_welcome')]
    public function welcome(): Response
    {
        return $this->render('home_page/presentation.html.twig');
    }
    #[Route('/turbo/menu', name: 'app_home_page_menu')]
    public function menu(): Response
    {
        return $this->render('home_page/menu.html.twig');
    }
    #[Route('/turbo/profile', name: 'app_home_page_profile')]
    public function profile(): Response
    {
        return $this->render('home_page/profile.html.twig');
    }
    #[Route('/turbo/login', name: 'app_home_page_login')]
    public function lofin(): Response
    {
        return $this->render('home_page/login.html.twig');
    }


    
}
