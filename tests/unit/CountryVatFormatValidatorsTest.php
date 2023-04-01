<?php

namespace rocketfellows\CountryVatFormatValidatorInterface\tests\unit;

use PHPUnit\Framework\TestCase;

class CountryVatFormatValidatorsTest extends TestCase
{
    public function testInitEmptyCountryVatFormatValidatorsTuple(): void
    {
        $validators = new CountryVatFormatValidators();

        $actualValidators = [];

        foreach ($validators as $validator) {
            $actualValidators[] = $validator;
        }

        $this->assertEmpty($actualValidators);
    }
}
