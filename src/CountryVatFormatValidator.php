<?php

namespace rocketfellows\CountryVatFormatValidatorInterface;

use rocketfellows\CountryVatFormatValidatorInterface\exceptions\CountryVatFormatValidationException;
use Throwable;

abstract class CountryVatFormatValidator implements CountryVatFormatValidatorInterface
{
    public function isValid(string $vatNumber): bool
    {
        try {
            return $this->isValidFormat($vatNumber);
        } catch (Throwable $exception) {
            throw new CountryVatFormatValidationException(
                $exception->getMessage(),
                $exception->getCode(),
                $exception
            );
        }
    }

    abstract protected function isValidFormat(string $vatNumber): bool;
}
