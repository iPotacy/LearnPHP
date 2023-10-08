<?php

echo "Masukkan sebuah string : ";

$inputString = trim(fgets(STDIN));

$hitungString = count_chars($inputString, 1);

echo "Frekuensi karakter dalam string adalah :\n";
foreach ($hitungString as $string => $nilai)
{
  echo chr($string) . " : $nilai\n";
}