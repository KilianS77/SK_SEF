<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeLoginController extends AbstractController
{
    #[Route("/login", name: "login")]
    public function login(): Response
    {
        return $this->render('home_login/index.html.twig'); // Page de connexion
    }
}


