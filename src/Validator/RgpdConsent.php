<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class RgpdConsent extends Constraint
{
    public $message = 'Le consentement RGPD doit être donné.';
}
