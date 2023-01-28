<?php

namespace rocketfellows\CountryVatFormatValidatorInterface\tests\unit;

use Error;
use Exception;
use rocketfellows\CountryVatFormatValidatorInterface\exceptions\CountryVatFormatValidationException;
use Throwable;

class CommonCountryVatFormatValidatorTest extends CountryVatFormatValidatorTest
{
    private const IS_VALID_FORMAT_DEFAULT_TEST_VALUE = true;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = $this->createValidator(self::IS_VALID_FORMAT_DEFAULT_TEST_VALUE);
    }

    /**
     * @dataProvider getValidationErrorProvidedData
     */
    public function testHandleValidationError(
        string $vatNumber,
        Throwable $thrownValidationException,
        Exception $expectedException
    ): void {
        $this->validator = $this->createValidator(true, $thrownValidationException);

        $this->expectExceptionObject($expectedException);

        $this->validator->isValid($vatNumber);
    }

    public function getValidationErrorProvidedData(): array
    {
        $exceptionWithoutMessage = new Exception();
        $exceptionWithMessage = new Exception('foo');
        $errorWithoutMessage = new Error();
        $errorWithMessage = new Error('bar');

        return [
            'thrown exception without' => [
                'vatNumber' => 'foo',
                'thrownValidationError' => $exceptionWithoutMessage,
                'expectedException' => new CountryVatFormatValidationException(
                    '',
                    0,
                    $exceptionWithoutMessage
                ),
            ],
            'thrown exception with message' => [
                'vatNumber' => 'foo',
                'thrownValidationError' => $exceptionWithMessage,
                'expectedException' => new CountryVatFormatValidationException(
                    'foo',
                    0,
                    $exceptionWithMessage
                ),
            ],
            'thrown error without message' => [
                'vatNumber' => 'foo',
                'thrownValidationError' => $errorWithoutMessage,
                'expectedException' => new CountryVatFormatValidationException(
                    '',
                    0,
                    $errorWithoutMessage
                ),
            ],
            'thrown error with message' => [
                'vatNumber' => 'foo',
                'thrownValidationError' => $errorWithMessage,
                'expectedException' => new CountryVatFormatValidationException(
                    'bar',
                    0,
                    $errorWithMessage
                ),
            ],
        ];
    }

    /**
     * @dataProvider getValidateResultProvidedData
     */
    public function testValidateResult(string $vatNumber, bool $expectedValidationResult): void
    {
        $this->validator = $this->createValidator($expectedValidationResult);

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

    private function createValidator(
        bool $isValidFormat,
        ?Throwable $thrownValidationException = null
    ): CountryVatFormatValidatorMock {
        $validator = new CountryVatFormatValidatorMock(true, $thrownValidationException);

        $this->assertInstanceOf(CountryVatFormatValidator::class, $this->validator);

        return $validator;
    }
}
