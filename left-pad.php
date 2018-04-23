<?php

class LeftPad {
  public static function leftpad($str, int $len, string $ch) : string
  {
       $str = (string)$str;
  
       if (!$ch) $ch = ' ';
       $len = $len - strlen($str);
       for ($i = 0; $len > $i; $i++)
       {
            $str = $ch . $str;
        }
        return $str;
  }
}
