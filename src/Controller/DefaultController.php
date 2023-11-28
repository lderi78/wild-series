<?php
// Le rôle du contrôleur de Symfony est de retourner un objet de la classe Response.
// Symfony\Bundle\FrameworkBundle = src
// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    // Une route en attribut nommée app_index qui devra répondre à une requête sur l'url /
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}
