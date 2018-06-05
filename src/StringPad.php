<?php
namespace Zhukmax;

class StringPad
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
  
    public static function right($str, int $len, string $ch = ' ') : string
    {
        $str = (string)$str;
  
      $len = $len - strlen($str);
      for ($i = 0; $len > $i; $i++)
      {
          $str .= $ch;
      }

      return $str;
    }
}
