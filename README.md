# left-pad
Left Pad for php

## Install
```console
$ composer require zhukmax/stringpad
```

## Usage

```php
<?php
include "left-pad.php";

class Test {
	use LeftPadTrait;
	
	public function a ()
	{
		$c = rand(0, 999);
		return $this->leftpad($c, 4, 0);
	}
	public function b ($c = '')
	{
		return $this->leftpad($c, 5);
	}
}

$test = new Test;
$str = $test->leftpad(5, 6, 0);

echo $str, $test->b(), $test->a(), $test->b('test');
// => 000005     0739 test
```
