<?php

namespace App\DataFixtures;

use App\Entity\Avis;
use App\Entity\UserTest;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{



    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $utilisateur = new UserTest();
            $utilisateur->setUsername("user" . $i);
            $utilisateur->setEmail("user" . $i . "@gmail.com");
            $utilisateur->setPassword("user" . $i);

            if ($i % 2 == 0) {
                $utilisateur->setRoles(["VENDEUR"]);
            } else {
                $utilisateur->setRoles(["ACHETEUR"]);
            }

            $manager->persist($utilisateur);
            $manager->flush();

            $this->addReference('user' . $i, $utilisateur);
        }

        $users = $manager->getRepository(UserTest::class)->findAll();

        foreach ($users as $user) {
            // Vérifiez si l'utilisateur a le rôle de vendeur
            if (in_array('VENDEUR', $user->getRoles(), true)) {

                for ($i = 1; $i < 7; $i++) {
                    $avis = new Avis();
                    $avis->setContenu("Ceci est l'avis n°$i pour le vendeur " . $user->getId());
                    $avis->setNote(mt_rand(1, 5));

                    if ($i % 2 == 0) {
                        $avis->setAcheteurField($this->getReference('user' . $i));
                        $avis->setVendeurField($user);
                    } else {
                        $avis->setAcheteurField($this->getReference('user0'));
                        $avis->setVendeurField($user);
                    }




                    $manager->persist($avis);
                }


                $manager->flush();


            }

        }


    }
}
