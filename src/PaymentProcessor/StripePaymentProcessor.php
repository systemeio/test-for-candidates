<?php

namespace Systemeio\TestForCandidates\PaymentProcessor;

class StripePaymentProcessor
{
    /**
     * @return bool true if payment was succeeded, false otherwise
     */
    public function processPayment(float $price): bool
    {
        if ($price < 1.00) {
            return false;
        }

        //process payment logic
        return true;
    }
}
