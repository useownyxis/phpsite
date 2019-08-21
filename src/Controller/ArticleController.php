<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG');
    }

    /**
     * @Route("/hello/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'hello:%s',
            $slug
        ));
    }
}