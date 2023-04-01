<?php

namespace rocketfellows\CountryVatFormatValidatorInterface\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface;

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

    /**
     * @dataProvider getCountryVatFormatValidatorsProvidedData
     * @param array $expectedValidators
     */
    public function testInitCountryVatFormatValidatorsTupleByArray(
        array $expectedValidators
    ): void {
        $validators = new CountryVatFormatValidators(...$expectedValidators);
        $actualValidators = [];

        foreach ($validators as $validator) {
            $actualValidators[] = $validator;
        }

        $this->assertEquals($expectedValidators, $actualValidators);
    }

    public function getCountryVatFormatValidatorsProvidedData(): array
    {
        return [
            'empty validators' => [
                'expectedValidators' => [],
            ],
            'one validator' => [
                'expectedValidators' => [
                    $this->createMock(CountryVatFormatValidatorInterface::class),
                ],
            ],
            'two validators' => [
                'expectedValidators' => [
                    $this->createMock(CountryVatFormatValidatorInterface::class),
                    $this->createMock(CountryVatFormatValidatorInterface::class),
                ],
            ],
            'multiple validators' => [
                'expectedValidators' => [
                    $this->createMock(CountryVatFormatValidatorInterface::class),
                    $this->createMock(CountryVatFormatValidatorInterface::class),
                    $this->createMock(CountryVatFormatValidatorInterface::class),
                    $this->createMock(CountryVatFormatValidatorInterface::class),
                    $this->createMock(CountryVatFormatValidatorInterface::class),
                ],
            ],
        ];
    }
}
