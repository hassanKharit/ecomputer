<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactformController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(RequestStack $requestStack): Response
    {

       dd ($requestStack->getSession()->get("identite"));

        return $this->render('contactform/index.html.twig', [
            'controller_name' => 'ContactformController',
            
        ]);
    }
}
