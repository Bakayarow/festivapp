<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TempoController extends AbstractController
{
    #[Route('/tempo', name: 'app_tempo')]
    public function index(): Response
    {
        return $this->render('tempo/index.html.twig', [
            'controller_name' => 'TempoController',
        ]);
    }
}
