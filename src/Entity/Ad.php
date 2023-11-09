<?php

namespace App\Entity;

use App\Enum\AdTypes;
use App\Repository\AdRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdRepository::class)]
class Ad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, enumType: AdTypes::class)]
    private ?AdTypes $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?AdTypes
    {
        return $this->type;
    }

    public function setType(AdTypes $type): static
    {
        $this->type = $type;

        return $this;
    }
}
