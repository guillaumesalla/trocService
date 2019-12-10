<?php

namespace App\Controller;

use App\Entity\Troc;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     * @return Response
     */
    public function afficherUsers()
    {
        $em = $this->getDoctrine()->getRepository(Users::class);
        return $this->render('users.html.twig', [
                'users' => $em->findAll(),
        ]);
    }
}
