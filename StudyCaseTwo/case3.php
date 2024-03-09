<?php

/** 
 * Tulis fungsi untuk mengubah nama menjadi inisial. Kata ini hanya membutuhkan dua kata 
 * dengan satu spasi di antaranya.
 * Outputnya harus berupa dua huruf kapital dengan titik yang memisahkannya.
 * 
 * Seharusnya terlihat seperti ini:
 * Sam Harris => S.H
 * patrick feeney => P.F
 */

function abbrevName($name) {
  $words = explode(' ', $name);
  return strtoupper($words[0][0]) . '.' . strtoupper($words[1][0]);
}

echo abbrevName('Sam Harris');
echo abbrevName('patrick feeney');

?>