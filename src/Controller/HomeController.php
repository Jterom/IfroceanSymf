<?php

namespace App\Controller;

use App\Entity\Communes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $communes = $this->getDoctrine()->getRepository(Communes::class)->findAll();


        return $this->render('home/index.html.twig', ['communes' => $communes]);
    }
}
