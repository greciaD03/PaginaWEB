<?php

namespace App\Controller;

use App\Entity\Post;
Use Doctrine\DRM\EntityManagerInterface; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post', name: 'app_post')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => ['saludo' => 'Hola', 'nombre' => 'Grecia'],
        ]);
    }

    /*private $em;

    /**
     * @param $em
     */
    /*public function __contruct(EntityManagerInterface $em) 
    {
        $this->em = $em;
    }

    #[Route('/post/{id}', name: 'app_post')]
    public function index($id): Response
    {
        $post = $this->em->getRepository(Post::class)->find(1);
        return $this->render('post/index.html.twig', [
            'post' => $post,
        ]);
    }*/
}
