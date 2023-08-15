<?php

// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/dash", name="dash_index")
     */
    public function index(): Response
    {
        return $this->render('dash/index.html.twig');
    }

    /**
     * @Route("/", name="dash_index")
     */
    public function home(): Response
    {
        return $this->render('dash/home.html.twig');
    }
}
