<?php

namespace App\Controller;

use App\Repository\UserTestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AverageCalculator;


class AnnonceController extends AbstractController
{
    private $averageCalculator;

    public function __construct(AverageCalculator $averageCalculator)
    {
        $this->averageCalculator = $averageCalculator;
    }

    #[Route('/annonce/{userId}', name: 'app_annonce',defaults:['name'=>null],methods:['GET','HEAD'])]
    public function index(int $userId,UserTestRepository $userTestRepository): Response
    {
         $user = $userTestRepository->findOneBy(['id' => $userId]);
        
        [$nombreAvisRecus, $average] = $this->averageCalculator->calculateAverage($userTestRepository, $userId);
        

        return $this->render('annonce.html.twig',[
            'userId'=> $userId,
            'average'=> $average,
            'nombreAvis'=>$nombreAvisRecus,
            'user'=> $user
    ]);
          
    }


   
}
