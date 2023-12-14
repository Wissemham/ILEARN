<?php

namespace App\Entity;

use App\Repository\CommandRepository;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandRepository::class)]
class Command
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idcommand = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?DateTimeInterface $datecommand = null;

    #[ORM\Column]
    private ?int $total = null;

    #[ORM\Column(length: 150)]
    private ?string $etat = null;

    
<<<<<<< HEAD
    #[ORM\ManyToOne(inversedBy: 'comm')]
    private ?User $iduser;
=======
<<<<<<< HEAD
    #[ORM\ManyToOne(inversedBy: 'comm')]
    private ?User $iduser;
=======
    #[ORM\Column]
<<<<<<< HEAD
    private ?int $iduser;
=======
    private int $iduser;
>>>>>>> 8b4ef130ec757feb7d04e3bd39120ab95229a729
>>>>>>> main
<<<<<<< HEAD
>>>>>>> 078c388824bb1ea755dd5d30634ea302c0539f84
=======
>>>>>>> refs/remotes/origin/main
>>>>>>> main

    public function getIdcommand(): ?int
    {
        return $this->idcommand;
    }

    public function getDatecommand(): ?\DateTimeInterface
    {
        return $this->datecommand;
    }

    public function setDatecommand(?\DateTimeInterface $datecommand): self
    {
        $this->datecommand = $datecommand;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }


}
