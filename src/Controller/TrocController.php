<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrocController extends AbstractController
{
    /**
     * @Route("/troc/{id}", name="troc")
     * @param $id
     * @return Response
     */
    public function afficherTroc($id)
    {
        return $this->render('troc.html.twig', [
            'id' => $id,
        ]);
    }

    /**
     * @Route("/troc", name="troc")
     */
    public function afficherTrocs()
    {
        return $this->render('trocs.html.twig',[

        ]);
    }
}
