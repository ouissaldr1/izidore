<?php 

namespace App\Service;

use App\Repository\UserTestRepository;

class AverageCalculator{


    
public function calculateAverage(UserTestRepository $userTestRepository, int $userId){
            
        $userTest = $userTestRepository-> findOneBy(['id' => $userId]);

        if($userTest){
             $avisReçus = $userTest->getAvisReçus();
             $nombreAvisReçus = $avisReçus->count();

             $sommeNotes = 0;
             foreach($avisReçus as $avis){
                $sommeNotes += $avis->getNote();
             }

            if ($nombreAvisReçus > 0) {
            $moyenne = $sommeNotes / $nombreAvisReçus;
            }
             else {
            $moyenne = 0;
            }

            // Arrondir à 0.5 près
        $moyenneArrondie = round($moyenne * 2) / 2;

        // Vérifier et arrondir 
        if ($moyenneArrondie <= 1) {
            $moyenneArrondie = 1;
        }
        elseif ($moyenneArrondie < 1.5) {
            $moyenneArrondie = 1.5;
        } elseif ($moyenneArrondie < 2) {
            $moyenneArrondie = 2;
        } elseif ($moyenneArrondie < 2.5) {
            $moyenneArrondie = 2.5;
        } elseif ($moyenneArrondie < 3) {
            $moyenneArrondie = 3;
        } elseif ($moyenneArrondie < 3.5) {
            $moyenneArrondie = 3.5;
        } elseif ($moyenneArrondie < 4) {
            $moyenneArrondie = 4;
        } elseif ($moyenneArrondie < 4.5) {
            $moyenneArrondie = 4.5;
        } else {
            $moyenneArrondie = 5;
        }

        return [$nombreAvisReçus, $moyenneArrondie];

        }

        
             
    }

    //  calculer le pourcentage de chaque note
    function calculerPourcentageNotes($nombreAvisReçus,$avisRecus) {
        
    $pourcentages = array();
    $compteurNotes = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);

    foreach ($avisRecus as $note) {
        
        if ($note >= 1 && $note <= 5) {
        $compteurNotes[$note]++;
    }
    }


    for ($note = 1; $note <= 5; $note++) {
        $pourcentage = ($compteurNotes[$note] / $nombreAvisReçus) *100;
        $pourcentages[$note] = intval($pourcentage);
    }

    return $pourcentages;

       
}
      
}