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

    // TODO: implement
    public function testInitNotEmptyCountryVatFormatValidatorsTuple(): void
    {
    }

    // TODO: implement
    public function getCountryVatFormatValidatorsProvidedData(): array
    {
        return [
            'one validator' => [
                'expectedValidators' => [

                ],
            ]
        ];
    }
}
