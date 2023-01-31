# Simple component template

![Code Coverage Badge](./badge.svg)

# Country vat format validator interface

This component provides interface for implementing vat format validators for different countries.

Consist of:
- CountryVatFormatValidatorInterface - main interface for country vat format validator.
- CountryVatFormatValidator - abstract country vat format validator, a class that enforces an interface contract.
- CountryVatFormatEmptinessValidator - simple country vat format validator, example of implementation CountryVatFormatValidatorInterface, also provides only emptiness validation if for some country format not essential for some reason. 

## Installation

```shell
composer require rocketfellows/country-vat-format-validator-interface
```

## CountryVatFormatValidatorInterface description

CountryVatFormatValidatorInterface has one function **_isValid_** that takes string vat number as parameter.
Interface implementations must handle inner exceptions and throws exceptions:
- CountryVatFormatValidationException

## CountryVatFormatValidator description

CountryVatFormatValidator enforces an CountryVatFormatValidatorInterface contract, handling all exceptions and throws CountryVatFormatValidationException.
Inheritors must implement abstract function **_isValid_** wherein all validation must be written.

Example of inheritor: CountryVatFormatEmptinessValidator

## CountryVatFormatEmptinessValidator description

CountryVatFormatEmptinessValidator simple country vat format validator, example of implementation CountryVatFormatValidatorInterface.
Also provides only emptiness validation if for some country format not essential for some reason.

May serve as an example of other country vat format validators implementations.

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
