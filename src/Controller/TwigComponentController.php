<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TwigComponentController extends AbstractController
{
    #[Route('/components', name: 'app_twig_component')]
    public function index(): Response
    {
        return $this->render('twig_component/index.html.twig', []);
    }
}
