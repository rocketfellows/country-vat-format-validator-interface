<?php

namespace rocketfellows\CountryVatFormatValidatorInterface\tests\unit;

use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatEmptinessValidator;

class CountryVatFormatEmptinessValidatorTest extends CountryVatFormatValidatorTest
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new CountryVatFormatEmptinessValidator();
    }
}
