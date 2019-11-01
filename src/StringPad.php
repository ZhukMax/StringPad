<?php
namespace Zhukmax;

class StringPad
{
    /**
     * @param string $str
     * @param int $len
     * @param string $ch
     * @return string
     */
    public static function left($str, $len, $ch = '0')
    {
         $str = (string)$str;
  
         $len = $len - strlen($str);
         for ($i = 0; $len > $i; $i++) {
              $str = $ch . $str;
         }

         return $str;
    }

    /**
     * @param string $str
     * @param int $len
     * @param string $ch
     * @return string
     */
    public static function right($str, $len, $ch = '0')
    {
        $str = (string)$str;
  
        $len = $len - strlen($str);
        for ($i = 0; $len > $i; $i++) {
            $str .= $ch;
        }

        return $str;
    }
}
