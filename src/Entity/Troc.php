<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="trocs")
     */
    private $user;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

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

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
        }

        return $this;
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}

