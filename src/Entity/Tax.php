<?php

namespace App\Entity;

use App\Repository\TaxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaxRepository::class)]
#[ORM\Table(name: "taxes")]
class Tax
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    private ?string $format = null;

    #[ORM\Column]
    private ?float $percent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function getPercent(): ?float
    {
        return $this->percent;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function setFormat(string $format): void
    {
        $this->format = $format;
    }

    public function setPercent(float $percent): void
    {
        $this->percent = $percent;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'country' => $this->country,
            'format' => $this->format,
            'percent' => $this->percent,
        ];
    }
}
