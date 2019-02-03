<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }


    /**
     * @Route("/logout")
     * @throws \RuntimeException
     */
    public function logoutAcion() {
        throw new \RuntimeException('This should never be called directly.');
    }
}
