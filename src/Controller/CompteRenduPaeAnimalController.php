<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CompteRenduPaeAnimalController extends AbstractController
{
    #[Route('/compte/rendu/pae/animal', name: 'app_compte_rendu_pae_animal')]
    public function index(): Response
    {
        return $this->render('compte_rendu_pae_animal/index.html.twig', [
            'controller_name' => 'CompteRenduPaeAnimalController',
        ]);
    }
}
