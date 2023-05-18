<?php

class StripePaymentProcessor
{
    /**
     * @return bool true if payment was succeeded, false otherwise
     */
    public function processPayment(int $price, string $taxNumber): bool
    {
        if ($price < 10) {
            return false;
        }

        //process payment logic
        return true;
    }
}