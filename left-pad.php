<?php
trait LeftPadTrait {
  public function leftpad ($str, $len, $ch)
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
?>
