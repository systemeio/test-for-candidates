<?php

namespace Systemeio\TestForCandidates\PaymentProcessor;

use Exception;

class PaypalPaymentProcessor
{
    /**
     * @param int $price payment amount in smallest currency unit
     * @throws Exception in case of a failed payment
     */
    public function pay(int $price): void
    {
        if ($price > 100000) {
            throw new Exception('[#14271] Transaction "c82711ca-7e67-41c8-9f35-5b965e645d12" failed: Too high price');
        }

        //process payment logic
    }
}
