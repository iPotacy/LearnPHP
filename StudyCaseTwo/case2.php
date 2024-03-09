<?php

/** 
 * Tugas Anda adalah membuat fungsi yang melakukan empat operasi matematika dasar.
 * Fungsi ini harus mengambil tiga argumen - operasi (string/char), nilai1 (angka), nilai2 (angka).
 * Fungsi tersebut harus mengembalikan hasil angka setelah menerapkan operasi yang dipilih.
 * Contoh(Operator, nilai1, nilai2) --> keluaran
 * ('+', 4, 7) --> 11
 * ('-', 15, 18) --> -3
 * ('*', 5, 5) --> 25
 * ('/', 49, 7) --> 7
 */

function basicOp($op, $val1, $val2) {
  return $op === '+' ? $val1 + $val2 : ($op === '-' ? $val1 - $val2 : 
                                       ($op === '*' ? $val1 * $val2 : 
                                       ($op === '/' ? $val1 / $val2 : "Operasi tidak valid")));
}

echo basicOp('+', 4, 7); // 11
echo basicOp('-', 15, 18); // -3
echo basicOp('*', 5, 5); // 25
echo basicOp('/', 49, 7); // 7


?>