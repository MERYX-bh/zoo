<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?habitat $image_id = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageId(): ?habitat
    {
        return $this->image_id;
    }

    public function setImageId(habitat $image_id): static
    {
        $this->image_id = $image_id;

        return $this;
    }

}
