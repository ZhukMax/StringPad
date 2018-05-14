# StringPad
Left and Right Pad for php

## Install
```console
$ composer require zhukmax/stringpad
```

## Usage

```php
<?php
include "left-pad.php";

$test = new Test;
$str = $test->leftpad(5, 6, 0);

echo $str, $test->b(), $test->a(), $test->b('test');
// => 000005     0739 test
```
