<?php

function reverse($string)
{
  $reverseString = strrev($string);
  return $reverseString;
}

// $input = "Hello, world";
// $reverseString = reverse($input);
// echo $reverseString;

echo "Masukan String : ";
$inputString = trim(fgets(STDIN));

$reverseString = reverse($inputString);
echo "Hasil Reverse : " . $reverseString . PHP_EOL;