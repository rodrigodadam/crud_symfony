<?php


namespace App\Controller\users;

use App\Controller\ArticleController;
use App\Entity\Article;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DeleteController extends ArticleController
{
    /**
     * @Route(
     *  "/article/delete/{id}",
     *  methods={"DELETE"}
     *  )
     */
    public function delete(Request $request, $id)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($article);
        $entityManager->flush();

        $response = new Response();
        $response->send();
    }
}