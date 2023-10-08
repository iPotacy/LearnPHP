<?php

// Array Asosiatif dalam PHP:

/** Array asosiatif adalah jenis array yang menggunakan kunci (biasanya berupa string)
 *  untuk mengidentifikasi dan mengakses elemen-elemennya. Dalam array asosiatif,
 *  Anda memberikan nama khusus (kunci) untuk setiap elemen, dan Anda dapat 
 *  menggunakan kunci ini untuk mengambil atau mengubah nilai elemen tersebut.
 */

$siswa = array
(
  "nama" => "John",
  "usia" => 18,
  "kelas" => "XII-A"
);

/** Dalam contoh di atas, kita telah membuat array asosiatif dengan nama $siswa.
 *  Array ini memiliki tiga elemen dengan kunci-kunci yang kita tentukan: "nama",
 *  "usia", dan "kelas". Kunci-kunci ini digunakan untuk mengidentifikasi dan
 *  mengakses nilai-nilai yang sesuai.
 */

/** Anda dapat mengakses nilai-nilai elemen array asosiatif
 *  dengan menggunakan kunci seperti ini:
 */

echo $siswa["nama"];  // Output: John
echo $siswa["usia"];  // Output: 18
echo $siswa["kelas"]; // Output: XII-A

// Menambahkan Elemen ke Array Asosiatif:

/** Anda dapat menambahkan elemen baru ke dalam array asosiatif
 *  dengan menentukan kunci dan nilainya:
 */

$siswa["alamat"] = "Jl. Contoh No. 123"; // Menambahkan alamat siswa

// Mengedit Elemen Array Asosiatif:

/** Anda dapat mengubah nilai elemen array asosiatif 
 *  dengan mengaksesnya menggunakan kunci dan kemudian mengganti nilainya:
 */

$siswa["usia"] = 19; // Mengubah nilai usia menjadi 19

// Menghapus Elemen dari Array Asosiatif:

/** Anda dapat menghapus elemen dari array asosiatif menggunakan pernyataan unset():
 */

unset($siswa["kelas"]); // Menghapus elemen dengan kunci "kelas"

// Iterasi melalui Elemen Array Asosiatif:

/** Anda dapat menggunakan perulangan foreach untuk mengakses
 *  dan memanipulasi elemen-elemen array asosiatif:
 */

foreach ($siswa as $key => $value) 
{
  echo $key . ": " . $value . "<br>";
}

// Mengecek Ketersediaan Kunci dalam Array Asosiatif:

/** Anda dapat menggunakan pernyataan isset()
 *  untuk memeriksa apakah kunci tertentu ada dalam array asosiatif:
 */

if (isset($siswa["alamat"]))
{
  echo "alamat siswa : " . $siswa["alamat"];
}
else 
{
  echo "alamat siswa tidak tersedia.";
}

/** Array asosiatif sangat berguna ketika Anda ingin mengelola data
 *  dengan lebih terstruktur dan memiliki kunci yang jelas
 *  untuk mengidentifikasi setiap nilai.
 *  dengan array asosiatif, anda dapat mengakses nilai
 *  berdasar nama kunci yang mudah diingat, membuat kode
 *  lebih mudah dibaca dan pahami. 
 */