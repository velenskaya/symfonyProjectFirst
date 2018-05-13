<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestTwigController extends Controller
{
    /**
     * @Route("/test/twig", name="test_twig")
     */
    public function index()
    {
        return $this->render('test_twig/index.html.twig', [
            'controller_name' => 'TestTwigController',
        ]);
    }
}
