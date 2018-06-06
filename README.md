# StringPad
[![Software License][ico-license]](license.md)
[![Total Downloads][ico-downloads]][link-downloads]

Lib for add symbols to start or end of string like spaces, dots or any another.

## Install
```console
composer require zhukmax/stringpad
```

## Usage

```php
<?php
echo \Zhukmax\StringPad::left(5, 6, 0); // => 000005
echo \Zhukmax\StringPad::right('b', 5, 'a'); // => baaaa
```

[ico-license]: https://img.shields.io/badge/license-Apache%202-brightgreen.svg
[ico-downloads]: https://img.shields.io/packagist/dt/zhukmax/stringpad.svg
[link-downloads]: https://packagist.org/packages/zhukmax/smsc
