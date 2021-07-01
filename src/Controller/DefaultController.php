<?php

namespace App\Controller;

use App\Entity\Meme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(): Response
    {
         $memes = $this->getDoctrine()->getRepository(Meme::class)->findAll();
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'memes'=> $memes
        ]);
    }
}
