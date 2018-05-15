<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('main/index.html.twig.', [
            'controller_name' => 'MainController',

        ]);
    }

    /**
     * @Route("/blogg", name="blogg")
     */
    public function blogg()
    {
        //$doctrine = $this->getDoctrine();
        //$postRepository = $doctrine->getRepository(Post::class);
        //$posts = $postRepository-> findAll();

        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        dump($posts);
        return $this->render('main/blog.html.twig.', compact('posts'));
    }

    /**
     * @Route("/article/{articleId}", name="article")
     */
    public function article()
    {
        return $this->render('main/index.html.twig.', [
            'controller_name' => 'MainController',

        ]);
    }



}
