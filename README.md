# StringPad
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
