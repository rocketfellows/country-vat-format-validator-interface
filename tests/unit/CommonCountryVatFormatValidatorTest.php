<?php

namespace rocketfellows\CountryVatFormatValidatorInterface\tests\unit;

class CommonCountryVatFormatValidatorTest extends CountryVatFormatValidatorTest
{
    private const IS_VALID_FORMAT_DEFAULT_TEST_VALUE = true;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new CountryVatFormatValidatorMock(self::IS_VALID_FORMAT_DEFAULT_TEST_VALUE);
    }

    /**
     * @dataProvider getValidateResultProvidedData
     */
    public function testValidateResult(string $vatNumber, bool $expectedValidationResult): void
    {
        $this->validator = new CountryVatFormatValidatorMock($expectedValidationResult);

        $this->assertEquals($expectedValidationResult, $this->validator->isValid($vatNumber));
    }

    public function getValidateResultProvidedData(): array
    {
        return [
            'returns true' => [
                'vatNumber' => 'foo',
                'expectedValidationResult' => true,
            ],
            'returns false' => [
                'vatNumber' => 'foo',
                'expectedValidationResult' => false,
            ],
        ];
    }
}
