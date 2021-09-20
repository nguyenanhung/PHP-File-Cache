# PHP File Cache

[![Latest Stable Version](http://poser.pugx.org/nguyenanhung/php-file-cache/v)](https://packagist.org/packages/nguyenanhung/php-file-cache) [![Total Downloads](http://poser.pugx.org/nguyenanhung/php-file-cache/downloads)](https://packagist.org/packages/nguyenanhung/php-file-cache) [![Latest Unstable Version](http://poser.pugx.org/nguyenanhung/php-file-cache/v/unstable)](https://packagist.org/packages/nguyenanhung/php-file-cache) [![License](http://poser.pugx.org/nguyenanhung/php-file-cache/license)](https://packagist.org/packages/nguyenanhung/php-file-cache) [![composer.lock](http://poser.pugx.org/nguyenanhung/php-file-cache/composerlock)](https://packagist.org/packages/nguyenanhung/php-file-cache) [![PHP Version Require](http://poser.pugx.org/nguyenanhung/php-file-cache/require/php)](https://packagist.org/packages/nguyenanhung/php-file-cache)

Light, simple and standalone PHP in-file caching class

This library is fork code from `https://github.com/Wruczek/PHP-File-Cache` as refactoring someone!

### Advantages

- Light, standalone and simple
- All code in one file - no pointless drivers.
- Secure - every generated cache file have a php header with `die`, making direct access impossible even if someone knows the path, and your server is not configured properly
- Well documented and tested
- Supports PHP 5.4 - 8.0
- Free under a GPL-3.0 license

### Requirements and Installation

You need PHP 5.4+ for usage

Require with composer:

`composer require nguyenanhung/php-file-cache`

### Usage

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';
use nguyenanhung\PhpFileCache\PhpFileCache;

$cache = new PhpFileCache();

$data = $cache->refreshIfExpired("simple-cache-test", function () {
    return date("H:i:s"); // return data to be cached
}, 10);

echo "Latest cache save: $data";
```

See [examples](https://github.com/nguyenanhung/PHP-File-Cache/tree/master/examples) for more

## Support

If any question & request, please contact following information

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Vietnam with Love <3