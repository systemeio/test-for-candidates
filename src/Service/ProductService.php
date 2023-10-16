<?php

namespace App\Service;

use App\Entity\Product;
use App\Traits\CouponNumberTrait;
use App\Traits\TaxNumberTrait;
use Doctrine\ORM\EntityManagerInterface;

class ProductService
{
    use TaxNumberTrait, CouponNumberTrait;

    public function getProductPrice(Product $product, EntityManagerInterface $em, string $taxNumber, ?string $couponNumber = null): float
    {
        $priceWithTax = $this->calculatePriceTax($em, $taxNumber, $product->getPrice());
        return $this->calculateCouponDiscount($em, $couponNumber, $priceWithTax);
    }
}

