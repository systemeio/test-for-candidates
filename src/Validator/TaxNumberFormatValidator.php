<?php

namespace App\Validator;

use App\Entity\Tax;
use App\Traits\TaxNumberTrait;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class TaxNumberFormatValidator extends ConstraintValidator
{
    use TaxNumberTrait;

    private $entityManager;

    public function __construct(EntityManagerInterface $em)
    {
        $this->entityManager = $em;
    }

    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$constraint instanceof TaxNumberFormat) {
            throw new UnexpectedTypeException($constraint, TaxNumberFormat::class);
        }

        if ($value === null || $value === '') {
            return;
        }

        $taxFormat = $this->getTaxNumberFormat($value);
        $em = $this->entityManager;

        $tax = $em->getRepository(Tax::class)->findOneBy([
            'format' => $taxFormat
        ]);


        if (!$tax) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}
