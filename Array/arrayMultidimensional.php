<?php

// Array Multidimensional dalam PHP

/** Array multidimensional adalah jenis array yang berisi array lain di dalamnya.
 *  Dalam array ini, setiap elemen array bisa menjadi array lagi.
 *  Ini memungkinkan Anda untuk menyimpan data yang lebih kompleks,
 *  seperti tabel dua dimensi atau matriks.
 */

$matriks = array
(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

/** Dalam contoh diatas kita telah membuat sebuah 
 *  array multidimensional yang ddisebut $matriks.
 *  Array ini memiliki tiga elemen, dan setiap element
 *  adalah array numerik yang memiliki tiga nilai:
 *  (1, 2, 3), (4, 5, 6) dan (7, 8, 9).
 */

/** anda dapat mengakses nilai - nilai dalam array multidimensional
 *  dengan menggunakan indeks (dua indeks dalam kasus ini)
 */

echo $matriks[0][0]; // Ouput : 1
echo $matriks[1][2]; // Ouput : 6
echo $matriks[2][1]; // Ouput : 8

/** Beberapa operasi umum yang dapat anda lakukan
 *  dengan array multidimensional adalah:
 */

// iterasi melalui Elemen:

/** anda dapat menggunakan perulangan bersarang (nested loops) 
 *  mengakses dan memanipulasi elemen - elemen array multidimensional.
 *  ini memungkinkan anda untuk mengakses setiap elemen satu per satu  
 */

for ($index = 0; $index < count($matriks); $index++)
{
  for ($indexKedua = 0; $indexKedua < count($matriks[$index]); $indexKedua++)
  {
    echo $matriks[$index][$indexKedua] . " ";
  }
  echo "\n";
}

// Menambahkan Elemen:

/** Anda dapat menambahkan elemen baru ke dalam array multidimensional
 *  dengan cara yang sama seperti array numerik atau asosiatif.
 *  Misalnya, untuk menambahkan elemen baru ke baris terakhir dan kolom kedua:
 */

$matriks[2][] = 10; // Menambahkan 10 ke baris terakhir dan kolom

// Mengedit Elemen:

/** Anda dapat mengubah nilai elemen dalam array multidimensional
 *  dengan menggunakan indeks yang sesuai:
 */

$matriks[1][2] = 99; // Mengubah nilai elemen pada baris kedua dan kolom kedua menjadi 99

// Menghapus Elemen:

/** Anda dapat menggunakan pernyataan unset()
 *  untuk menghapus elemen dalam array multidimensional:
 */

unset($matriks[0][2]); // Menghapus elemene pada baris pertaman dan kolom ke dua