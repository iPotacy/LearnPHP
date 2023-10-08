<?php 

// Array Numerik dalam PHP

/** Array numerik adalah 
 *  jenis array yang paling sederhana 
 *  dalam PHP. Array ini 
 *  digunakan untuk menyimpan kumpulan nilai (elemen) 
 *  yang diidentifikasi oleh indeks numerik. 
 *  Indeks numerik dimulai dari 0 dan terus bertambah secara otomatis. 
 */

$buah = array("Apel", "Mangga", "Jeruk");

/** Dalam contoh ini, kita telah membuat sebuah array numerik yang disebut $buah
 *  dan mengisinya dengan tiga elemen:
 *  "Apel", "Mangga", dan "Jeruk".
 *  Elemen-elemen ini diidentifikasi
 *  oleh indeks numerik secara otomatis:
 */

//  Indeks 0: "Apel"
//  Indeks 1: "Mangga"
//  Indeks 2: "Jeruk"

echo $buah[0]; // Output: Apel
echo $buah[1]; // Output: Mangga
echo $buah[2]; // Output: Jeruk

// Menambahkan Elemen ke Array

/** Anda dapat menambahkan elemen baru ke dalam array numerik
 *  dengan beberapa cara, salah satunya
 *  adalah dengan menggunakan [] seperti berikut:
 */

$buah[] = "Anggur"; // Menambahkan Anggur ke dalam array

/** Setelah pernyataan ini dieksekusi, Anggur akan menjadi
 *  elemen keempat dalam array $buah
 *  dengan indeks 3.
 */

// Menghitung Jumlah Elemen:

/** Untuk mengetahui berapa banyak elemen dalam array numerik,
 *  Anda dapat menggunakan fungsi count():
 */

$jumlah_buah = count($buah); // Menghitung jumlah elemen dalam array
echo $jumlah_buah; // Output: 4 (karena kita telah menambahkan Anggur)

// Iterasi melalui Elemen:

/** Anda dapat menggunakan perulangan seperti for atau foreach
 *  untuk mengakses dan memanipulasi elemen-elemen array:
 */

foreach ($buah as $item) 
{
  echo $item . " ";
} // Output: Apel Mangga Jeruk Anggur

// Mengedit Elemen:

/** Anda dapat mengubah nilai elemen array
 *  dengan mengaksesnya menggunakan indeks numerik
 *  dan kemudian mengganti nilainya:
 */

$buah[1] = "Pisang"; // Mengubah nilai indeks 1 menjadi Pisang

// Menghapus Elemen:

/** Anda dapat menghapus elemen dari array menggunakan pernyataan unset(): 
*/

unset($buah[2]); // Menghapus elemen dengan indeks 2 (Jeruk)

/** Itulah beberapa konsep dasar tentang array numerik dalam PHP.
 *  Array numerik sangat berguna ketika Anda
 *  ingin menyimpan kumpulan data yang memiliki hubungan satu sama lain
 *  dan ingin mengaksesnya dengan indeks numerik.
 */