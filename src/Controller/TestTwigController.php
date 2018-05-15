<?php

namespace App\Controller;

use http\Env\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestTwigController extends Controller
{
    /**
     * @Route("/twig", name="test_twig")
     */
    public function index()
    {
        return $this->render('test_twig/index.html.twig', [
            'controller_name' => 'TestTwigController',
        ]);
    }

    /**
     * @Route("/news/why-asteroids-test", name="test_twig")
     */
    public function news()
    {
        return new Response('тест пройден');
    }

}
