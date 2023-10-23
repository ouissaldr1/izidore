<?php

namespace App\Controller;

use App\Repository\UserTestRepository;
use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AverageCalculator;


#[Route('/avis')]
class AvisController extends AbstractController
{
    private $averageCalculator;

    public function __construct(AverageCalculator $averageCalculator)
    {
        $this->averageCalculator = $averageCalculator;
    }


    #[Route('/{userId}', name: 'app_avis_index', methods: ['GET'])]
    public function index(AvisRepository $avisRepository, UserTestRepository $userTestRepository, int $userId): Response
    {
        $notes = array();
        $pourcentages = array();
        $user = $userTestRepository->findOneBy(['id' => $userId]);

        $avis = $user->getAvisReçus();



        foreach ($avis as $avi) {
            $note = $avi->getNote();
            array_push($notes, $note);

        }


        [$nombreAvisRecus, $average] = $this->averageCalculator->calculateAverage($userTestRepository, $userId);
        $pourcentages = $this->averageCalculator->calculerPourcentageNotes($nombreAvisRecus, $notes);

        return $this->render('avis/avis.html.twig', [
            'avis' => $avis,
            'userId' => $userId,
            'average' => $average,
            'user'=> $user,
            'nombreAvis' => $nombreAvisRecus,
            'pourcentages' => $pourcentages,
            'notes' => [1, 2, 3, 4, 5]
        ]);

    }



    #[Route('/ajouter/{userId}', name: 'app_avis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserTestRepository $userTestRepository, int $userId): Response
    {

        $avi = new Avis();
        $noteError = "";
        $complimentEnum = [\ComplimentEnum::COMMUNICATION, \ComplimentEnum::CONFORMITE, \ComplimentEnum::LIVRAISON, \ComplimentEnum::QUALITE];
        if ($request->request->count() > 0) {
            $note = (int) $request->request->get('note');
            if ($note == 0) {
                $noteError = "la note doit être remplie";
            } else {
                $userTest = $userTestRepository->findOneBy(['id' => $userId]);
                $avi->setVendeurField($userTest);
                $avi->setAcheteurField($userTest);
                $avi->setContenu($request->request->get('contenu'));
                $avi->setNote($note);
                $avi->setCompliment($request->request->get('compliment'));
                $entityManager->persist($avi);
                $entityManager->flush();
                return $this->redirectToRoute('app_avis_index', ['userId' => $userId], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('avis/new.html.twig', [
            'avi' => $avi,
            'userId' => $userId,
            'errorNote' => $noteError,
            'compliment' => $complimentEnum
        ]);
    }

    #[Route('/{id}', name: 'app_avis_show', methods: ['GET'])]
    public function show(Avis $avi): Response
    {
        return $this->render('avis/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_avis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $avi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($avi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }


}
