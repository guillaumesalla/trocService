<?php

namespace App\Controller;

use App\Entity\Troc;
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
     * @Route("/trocs", name="trocs")
     * @return Response
     */
    public function afficherTrocs()
    {
        $em = $this->getDoctrine()->getRepository(Troc::class);
        return $this->render('trocs.html.twig',[
            'trocs' => $em->findAll(),
        ]);
    }
}
