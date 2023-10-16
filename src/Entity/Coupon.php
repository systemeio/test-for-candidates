<?php

namespace App\Entity;

use App\Repository\CouponRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CouponRepository::class)]
#[ORM\Table(name: "coupons")]
class Coupon
{
    const PERCENT_TYPE = 'percent';
    const FIXED_TYPE = 'fixed';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, unique: true)]
    private ?string $code = null;

    #[ORM\Column]
    private ?float $total = null;

    #[ORM\Column(length: 10)]
    private ?string $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'total' => $this->total,
            'type' => $this->type
        ];
    }
}
