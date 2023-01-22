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

    /**
     * @dataProvider getVatNumberProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumberProvidedData(): array
    {
        return [
            'empty vat number' => [
                'vatNumber' => '',
                'isValid' => false,
            ],
            'not empty vat number' => [
                'vatNumber' => '12313213',
                'isValid' => true,
            ],
        ];
    }
}
