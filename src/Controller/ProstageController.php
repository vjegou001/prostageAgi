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
        return $this->render("prostage/index.html.twig", [
          'message'=> 'Vous êtes sur l\'accueil de mon site'
        ]);
    }

    /**
     * @Route("/formations", name="formations")
     */
    public function listeFormations()
    {
      return $this->render("prostage/index.html.twig", [
        'message'=> 'Liste des formations'
      ]);
    }

    /**
     * @Route("/stage/{id}", name="stage")
     */
    public function stage(int $id)
    {
      return $this->render("prostage/stage.html.twig", [
        'message'=> "Vous êtes sur le stage $id",
        'id'=>$id,
      ]);
    }

    /**
     * @Route("/entreprises", name="entreprises")
     */
    public function listeEntreprises()
    {
      return $this->render("prostage/index.html.twig", [
        'message'=> 'Vous êtes la liste des entreprises'
      ]);
    }
}
