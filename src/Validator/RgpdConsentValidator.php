<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RgpdConsentValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        /* @var $constraint \App\Validator\RgpdConsent */

        if ($value !== 1) {
            // Ajoute une erreur si le consentement n'est pas donné
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}
