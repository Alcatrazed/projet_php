<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true, nullable: false, options: ["default" => ""])]
    private ?string $email = '';

    #[ORM\Column(length: 180, nullable: false, options: ["default" => ""])]
    private ?string $nom = '';

    #[ORM\Column(length: 180, nullable: false, options: ["default" => ""])]
    private ?string $prenom = '';

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(type: 'string', nullable: false, options: ["default" => ""])]
    private ?string $password = '';

    #[ORM\Column(type: 'boolean', options: ["default" => false])]
    private bool $isVerified = false;

    private ?string $plainPassword;
    private ?string $confirmPassword;
    private ?bool $agreeTerms;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Evenement::class)]
    private $evenements;

    #[ORM\ManyToMany(targetEntity: Evenement::class, mappedBy: 'participants')]
    private $evenementsInscrits;

    public function __construct()
    {
        $this->evenements = new ArrayCollection();
        $this->evenementsInscrits = new ArrayCollection();
    }

    // Getters et setters existants

    public function getEvenementsInscrits(): Collection
    {
        return $this->evenementsInscrits;
    }

    public function addEvenementInscrit(Evenement $evenement): self
    {
        if (!$this->evenementsInscrits->contains($evenement)) {
            $this->evenementsInscrits[] = $evenement;
            $evenement->addParticipant($this); // Ajouter l'utilisateur à l'événement
        }

        return $this;
    }

    public function removeEvenementInscrit(Evenement $evenement): self
    {
        if ($this->evenementsInscrits->removeElement($evenement)) {
            $evenement->removeParticipant($this); // Retirer l'utilisateur de l'événement
        }

        return $this;
    }


    /**
     * @return string|null
     */
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    /**
     * @param string|null $plainPassword
     */
    public function setPlainPassword(?string $plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * @return string|null
     */
    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    /**
     * @param string|null $confirmPassword
     */
    public function setConfirmPassword(?string $confirmPassword): void
    {
        $this->confirmPassword = $confirmPassword;
    }

    /**
     * @return bool|null
     */
    public function getAgreeTerms(): ?bool
    {
        return $this->agreeTerms;
    }

    /**
     * @param bool|null $agreeTerms
     */
    public function setAgreeTerms(?bool $agreeTerms): void
    {
        $this->agreeTerms = $agreeTerms;
    }





    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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
     * @return array
     * @see UserInterface
     *
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param array $roles
     * @return User
     */
    public function setRoles(array $roles): self
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

    public function setPassword(string $password): self
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

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getEvenements(): Collection
    {
        return $this->evenements;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenements->contains($evenement)) {
            $this->evenements[] = $evenement;
//            $evenement->setUser($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenements->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getUser() === $this) {
//                $evenement->setUser(null);
            }
        }

        return $this;
    }
}
