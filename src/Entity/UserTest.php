<?php

namespace App\Entity;
use App\Repository\UserTestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserTestRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class UserTest implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'vendeurField', targetEntity: Avis::class)]
    private Collection $avisReçus;

    #[ORM\OneToMany(mappedBy: 'acheteurField', targetEntity: Avis::class)]
    private Collection $avisLaisse;

    public function __construct()
    {
        $this->avisLaisse = new ArrayCollection();
        $this->avisReçus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
     public function getUsername(): ?string
    {
        return $this->username;
    }
      public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvisLaisse(): Collection
    {
        return $this->avisLaisse;
    }

    /**
     * @return Collection<int, Avis>
     */
    
    public function getAvisReçus(): Collection
    {
        return $this->avisReçus;
    }

    public function addAvisLaisse(Avis $avisLaisse): static
    {
        if (!$this->avisLaisse->contains($avisLaisse)) {
            $this->avisLaisse->add($avisLaisse);
            $avisLaisse->setVendeurField($this);
        }

        return $this;
    }

        public function addAvisReçus(Avis $avisReçus): static
    {
        if (!$this->avisReçus->contains($avisReçus)) {
            $this->avisReçus->add($avisReçus);
            $avisReçus->setVendeurField($this);
        }

        return $this;
    }

    public function removeAvisReçus(Avis $avisReçus): static
    {
        if ($this->avisReçus->removeElement($avisReçus)) {
            // set the owning side to null (unless already changed)
            if ($avisReçus->getVendeurField() === $this) {
                $avisReçus->setVendeurField(null);
            }
        }

        return $this;
    }

    public function removeAvisLaisse(Avis $avisLaisse): static
    {
        if ($this->avisLaisse->removeElement($avisLaisse)) {
            // set the owning side to null (unless already changed)
            if ($avisLaisse->getAcheteurField() === $this) {
                $avisLaisse->setAcheteurField(null);
            }
        }

        return $this;
    }
}
