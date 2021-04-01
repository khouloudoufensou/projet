<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController
{
    /**
     * @Route("/espace-membre", name="member")
     */
    public function index(): Response
    {
        return $this->render('member/index.html.twig', [
           
        ]);
    }
}
