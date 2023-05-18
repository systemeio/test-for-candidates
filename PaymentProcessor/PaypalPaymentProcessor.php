<?php

class PaypalPaymentProcessor
{
    /**
     * @throws Exception in case of a failed payment
     */
    public function pay(int $price, string $taxNumber): void
    {
        if ($price > 100) {
            throw new Exception('Too high price');
        }

        //process payment logic
    }
}