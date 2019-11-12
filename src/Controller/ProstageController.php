<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProstageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return new Response("<h1>Accueil de prostage</h1>");
    }

    /**
     * @Route("/formations", name="formations")
     */
    public function listeFormations()
    {
        return new Response("<h1>Liste des formation</h1>");
    }

    /**
     * @Route("/stage/{id}", name="stage")
     */
    public function stage(int $id)
    {
        return new Response("<h1>Description du stage numéro $id</h1>");
    }

    /**
     * @Route("/entreprises", name="entreprises")
     */
    public function listeEntreprises()
    {
        return new Response("<h1>Liste des entreprises</h1>");
    }
}
