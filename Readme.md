# Calculator Unit-Test init

## Req

- PHP >= 7.4
- Composer
- PHPUnit 

## install 

```bash
composer require --dev phpunit/phpunit
composer dump-autoload
vendor/bin/phpunit tests/CalculatorTest.php
```

## Test Results

![Failure with Floats](images/failure_with_floats.png)
![Syntactic fix for floats issue](images/Screenshot_1.png)