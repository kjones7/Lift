<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TestResourceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestResourceRepository::class)]
#[ApiResource]
class TestResource
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $TestField = null;

    #[ORM\Column]
    private ?int $AnotherTestField = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTestField(): ?string
    {
        return $this->TestField;
    }

    public function setTestField(string $TestField): static
    {
        $this->TestField = $TestField;

        return $this;
    }

    public function getAnotherTestField(): ?int
    {
        return $this->AnotherTestField;
    }

    public function setAnotherTestField(int $AnotherTestField): static
    {
        $this->AnotherTestField = $AnotherTestField;

        return $this;
    }
}
