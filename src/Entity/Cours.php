<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cours = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateAt = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dated�ebut = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $datefin = null;

    #[ORM\Column]
    private ?int $capacit�e = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCours(): ?string
    {
        return $this->cours;
    }

    public function setCours(?string $cours): static
    {
        $this->cours = $cours;

        return $this;
    }

    public function getDateAt(): ?\DateTimeImmutable
    {
        return $this->dateAt;
    }

    public function setDateAt(\DateTimeImmutable $dateAt): static
    {
        $this->dateAt = $dateAt;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDated�ebut(): ?\DateTimeImmutable
    {
        return $this->dated�ebut;
    }

    public function setDated�ebut(\DateTimeImmutable $dated�ebut): static
    {
        $this->dated�ebut = $dated�ebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeImmutable
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeImmutable $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getCapacit�e(): ?int
    {
        return $this->capacit�e;
    }

    public function setCapacit�e(int $capacit�e): static
    {
        $this->capacit�e = $capacit�e;

        return $this;
    }
}
