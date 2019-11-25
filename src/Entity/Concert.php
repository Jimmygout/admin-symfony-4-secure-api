<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ConcertRepository")
 */
class Concert
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chanteur;

    /**
     * @ORM\Column(type="boolean")
     */
    private $afficher;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChanteur(): ?string
    {
        return $this->chanteur;
    }

    public function setChanteur(string $chanteur): self
    {
        $this->chanteur = $chanteur;

        return $this;
    }

    public function getAfficher(): ?bool
    {
        return $this->afficher;
    }

    public function setAfficher(bool $afficher): self
    {
        $this->afficher = $afficher;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLieux(): ?string
    {
        return $this->lieux;
    }

    public function setLieux(string $lieux): self
    {
        $this->lieux = $lieux;

        return $this;
    }
}
