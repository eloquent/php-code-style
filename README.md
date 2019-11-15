# Eloquent PHP code style definition

## Installation

Install dependencies:

    composer require --dev friendsofphp/php-cs-fixer eloquent/code-style

Add a **.php_cs** file:

```php
<?php return Eloquent\CodeStyle\Config::create(__DIR__);
```

## Usage

    vendor/bin/php-cs-fixer fix
