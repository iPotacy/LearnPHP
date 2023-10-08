<?php

function generatefibonacci($nilai)
{
  $fibonacci = [0, 1];

  for ($index = 2; $index < $nilai; $index++)
  {
    $fibonacci[] = $fibonacci[$index - 1] + $fibonacci[$index - 2];
  }
  return $fibonacci;
}

echo "Masukan jumlah fibonacci : ";
$inputNilai = trim(fgets(STDIN));

if ($inputNilai <= 0)
{
  echo "Masukan angka yang valid lebih dari 0";
}
else 
{
  $hasilFibonacci = generatefibonacci($inputNilai);
  echo "Urutan nilai fibonacci hingga ke $inputNilai adalah : " . implode(',' , $hasilFibonacci);
}