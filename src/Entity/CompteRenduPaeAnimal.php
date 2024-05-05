<?php

namespace App\Entity;

use App\Repository\CompteRenduPaeAnimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompteRenduPaeAnimalRepository::class)]
class CompteRenduPaeAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $CompteRendu = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column(length: 255)]
    private ?string $RegimeAlimentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteRendu(): ?string
    {
        return $this->CompteRendu;
    }

    public function setCompteRendu(string $CompteRendu): static
    {
        $this->CompteRendu = $CompteRendu;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getRegimeAlimentaire(): ?string
    {
        return $this->RegimeAlimentaire;
    }

    public function setRegimeAlimentaire(string $RegimeAlimentaire): static
    {
        $this->RegimeAlimentaire = $RegimeAlimentaire;

        return $this;
    }
}
