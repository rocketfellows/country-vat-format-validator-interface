<?php

namespace rocketfellows\CountryVatFormatValidatorInterface;

use rocketfellows\tuple\Tuple;

class CountryVatFormatValidators extends Tuple
{
    public function __construct(CountryVatFormatValidatorInterface ...$validator)
    {
        parent::__construct(...$validator);
    }

    public function current(): ?CountryVatFormatValidatorInterface
    {
        return parent::current();
    }
}
