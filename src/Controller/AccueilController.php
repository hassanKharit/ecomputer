<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(RequestStack $requestStack): Response
    {   $identite=[
        "age","nom","prenom"
    ];
       dd ($requestStack->getSession()->set("identite",$identite));
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',

        ]);
    }
}
