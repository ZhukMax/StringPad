<?php
namespace Zhukmax;

class StringPad
{
    /**
     * @param $str
     * @param int $len
     * @param string $ch
     * @return string
     */
    public static function left($str, int $len, string $ch = '0') : string
    {
         $str = (string)$str;
  
         $len = $len - strlen($str);
         for ($i = 0; $len > $i; $i++) {
              $str = $ch . $str;
         }

         return $str;
    }

    /**
     * @param $str
     * @param int $len
     * @param string $ch
     * @return string
     */
    public static function right($str, int $len, string $ch = '0') : string
    {
        $str = (string)$str;
  
        $len = $len - strlen($str);
        for ($i = 0; $len > $i; $i++) {
            $str .= $ch;
        }

        return $str;
    }
}
