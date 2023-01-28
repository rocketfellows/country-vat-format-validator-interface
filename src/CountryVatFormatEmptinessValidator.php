<?php

namespace rocketfellows\CountryVatFormatValidatorInterface;

class CountryVatFormatEmptinessValidator extends CountryVatFormatValidator
{
    protected function isValidFormat(string $vatNumber): bool
    {
        return !empty($vatNumber);
    }
}
