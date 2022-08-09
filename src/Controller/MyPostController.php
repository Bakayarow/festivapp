<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;

class MyPostController extends AbstractController
{
    #[Route('/my/post', name: 'app_my_post')]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('my_post/index.html.twig', [
            'myPosts' => $postRepository->findBy(['user_id' => $this->getUser()->getId()]),
        ]);
    }
}
