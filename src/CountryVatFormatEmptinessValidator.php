<?php

namespace rocketfellows\CountryVatFormatValidatorInterface;

use rocketfellows\CountryVatFormatValidatorInterface\exceptions\CountryVatFormatValidationException;

class CountryVatFormatEmptinessValidator implements CountryVatFormatValidatorInterface
{
    public function isValid(string $vatNumber): bool
    {
        return !empty($vatNumber);
    }
}
