> # No longer maintained
>
> This package is no longer maintained. See [this statement] for more info.
>
> [this statement]: https://gist.github.com/ezzatron/713a548735febe3d76f8ca831bc895c0

# Eloquent PHP code style definition

## Installation

Install dependencies:

    composer require --dev friendsofphp/php-cs-fixer eloquent/code-style

Add a **.php-cs-fixer.php** file:

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
