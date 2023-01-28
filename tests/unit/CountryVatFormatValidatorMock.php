<?php

namespace rocketfellows\CountryVatFormatValidatorInterface\tests\unit;

use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidator;
use Throwable;

class CountryVatFormatValidatorMock extends CountryVatFormatValidator
{
    private $isValidFormat;
    private $validationError;

    public function __construct(
        bool $isValidFormat,
        ?Throwable $validationError = null
    ) {
        $this->isValidFormat = $isValidFormat;
        $this->validationError = $validationError;
    }

    protected function isValidFormat(string $vatNumber): bool
    {
        if (!is_null($this->validationError)) {
            throw $this->validationError;
        }

        return $this->isValidFormat;
    }
}
