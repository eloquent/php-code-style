# Eloquent PHP code style definition

## Installation

Install dependencies:

    composer require --dev friendsofphp/php-cs-fixer eloquent/code-style

Add a **.php_cs** file:

```php
<?php return Eloquent\CodeStyle\Config::create(__DIR__);
```

To customize excluded paths, access the existing finder object:

```php
<?php

$config = Eloquent\CodeStyle\Config::create(__DIR__);
$config->getFinder()->exclude([
    'artifacts',
    'test/fixture',
]);

return $config;
```

## Usage

    vendor/bin/php-cs-fixer fix
