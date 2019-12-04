<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrocRepository")
 */
class Troc
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
    private $serviceDemande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $servicePropose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="Troc")
     */
    private $users;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServiceDemande(): ?string
    {
        return $this->serviceDemande;
    }

    public function setServiceDemande(string $serviceDemande): self
    {
        $this->serviceDemande = $serviceDemande;

        return $this;
    }

    public function getServicePropose(): ?string
    {
        return $this->servicePropose;
    }

    public function setServicePropose(string $servicePropose): self
    {
        $this->servicePropose = $servicePropose;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }
}
