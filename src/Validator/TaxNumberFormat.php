<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Attribute;

#[Attribute]
class TaxNumberFormat extends Constraint
{
    public string $message = 'Tax number "{{ string }}" is not correct.';

    public function __construct(string $message = null, array $groups = null, $payload = null)
    {
        parent::__construct([], $groups, $payload);

        $this->message = $message ?? $this->message;
    }

    public function validatedBy(): string
    {
        return static::class.'Validator';
    }
}
