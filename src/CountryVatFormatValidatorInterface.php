<?php

namespace rocketfellows\CountryVatFormatValidatorInterface;

use rocketfellows\CountryVatFormatValidatorInterface\exceptions\CountryVatFormatValidationException;

interface CountryVatFormatValidatorInterface
{
    /**
     * @throws CountryVatFormatValidationException
     */
    public function isValid(string $vatNumber): bool;
}
