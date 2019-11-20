<?php


namespace App\Controller\users;

use App\Controller\ArticleController;
use App\Entity\Article;

use Symfony\Component\Routing\Annotation\Route;


class ShowController extends ArticleController
{
    /**
     * @Route("/article/{id}",
     *     name="article_show")
     */
    public function show($id)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        return $this->render('articles/show.html.twig', array('article' => $article));
    }
}