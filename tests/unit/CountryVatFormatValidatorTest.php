<?php

namespace rocketfellows\CountryVatFormatValidatorInterface\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface;

abstract class CountryVatFormatValidatorTest extends TestCase
{
    /**
     * @var CountryVatFormatValidatorInterface
     */
    protected $validator;

    public function testValidatorImplementInterface(): void
    {
        $this->assertInstanceOf(CountryVatFormatValidatorInterface::class, $this->validator);
    }
}
