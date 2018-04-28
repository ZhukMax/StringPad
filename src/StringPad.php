<?php

class StingPad
{
  public static function left($str, int $len, string $ch = ' ') : string
  {
       $str = (string)$str;
  
       $len = $len - strlen($str);
       for ($i = 0; $len > $i; $i++)
       {
            $str = $ch . $str;
       }
       return $str;
  }
  public function rightpad($str, $len, $ch)
  {
    $str = (string)$str;
  
    if (!$ch) $ch = ' ';
    $len = $len - strlen($str);
    for ($i = 0; $len > $i; $i++)
    {
      $str .= $ch;
    }
    return $str;
  }
}
