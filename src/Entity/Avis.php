<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(length: 255,nullable:true)]
    private ?string $contenu = null;

   
    #[ORM\Column]
    private ?int $note = null;



   

    #[ORM\ManyToOne(inversedBy:'avisReçus')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserTest $vendeurField = null;

    #[ORM\ManyToOne(inversedBy: 'avisLaisse')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserTest $acheteurField = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Compliment = null;

    public function __construct() {
        $this->dateCreation = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

   

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    
    

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }

     

    public function getVendeurField(): ?UserTest
    {
        return $this->vendeurField;
    }

    public function setVendeurField(?UserTest $vendeurField): static
    {
        $this->vendeurField = $vendeurField;

        return $this;
    }

    public function getAcheteurField(): ?UserTest
    {
        return $this->acheteurField;
    }

    public function setAcheteurField(?UserTest $acheteurField): static
    {
        $this->acheteurField = $acheteurField;

        return $this;
    }

    public function getCompliment(): ?string
    {
        return $this->Compliment;
    }

    public function setCompliment(?string $Compliment): static
    {
        $this->Compliment = $Compliment;

        return $this;
    }

}
