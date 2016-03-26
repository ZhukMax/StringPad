function leftpad ($str, $len, $ch)
{
  $str = (string)$str;
  
  if (!$ch && $ch !== 0) $ch = ' ';
  return $str;
}
