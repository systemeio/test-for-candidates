<?php

namespace App\Request;

use App\Requests\BaseRequest;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use App\Validator as AcmeAssert;

class CalculatePriceRequest extends BaseRequest
{
    #[Type('integer')]
    #[NotBlank()]
    protected $product_id;

    #[Type('string')]
    #[NotBlank([])]
    #[AcmeAssert\TaxNumberFormat()]
    protected $taxNumber;

    #[Type('string')]
    #[NotBlank([])]
    protected $couponCode;
}
