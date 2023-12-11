<?php

namespace App\Entity;

use App\Repository\MyListRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MyListRepository::class)]
class MyList
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $fk_user = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Test $fk_trip = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFkUser(): ?User
    {
        return $this->fk_user;
    }

    public function setFkUser(?User $fk_user): static
    {
        $this->fk_user = $fk_user;

        return $this;
    }

    public function getFkTrip(): ?Test
    {
        return $this->fk_trip;
    }

    public function setFkTrip(?Test $fk_trip): static
    {
        $this->fk_trip = $fk_trip;

        return $this;
    }
}
