<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\UserTestRepository;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function default(UserTestRepository $userTestRepository): Response
    {
       return $this->render('default/index.html.twig', [
            'users' => $userTestRepository->findAll(),
        ]);
        
    }
}
