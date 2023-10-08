<?php 

// VARIABLE DAN TIPE DATA

// Variabel digunakan untuk menampung sebuah nilai

/** Didalam PHP untuk membuat variable cukup menuliskan 
 *  tanda ( $ ) lalu menuliskan nama variablenya. 
 *  Di PHP kita tidak perlu mendefinisikan tipe datanya untuk sebuah nilai
 *  yang akan ditampung*/

/** Rules
 *  Tidak boleh diawali oleh angka, tetapi boleh mengandung angka 
 */

// $1nama = "Mahez arya"; -> ERROR
// $nama1 = "Mahez arya"; -> INFO

$nama = "Mahez arya";

/** Harus anda ketahui ada yang namanya konsep Interpolasi
 *  Interpolasi itu untuk mengecheck didalam kutif "" ( String )
 *  terdapat Variable atau tidak. jika terdapat Variable didalam kutif ""
 *  maka akan menampilkan isi dari Variablenya. Jika menggunakan kutif ''
 *  maka yang ditampilkan adalah String.
 */

echo " Nama saya adalah $nama"; // NAMA SAYA MAHEZ ARYA

echo 'N ama saya adalah $nama';

/** Jika ingin menampilkan variable
 *  Echo tidak harus menggunakan = jadi langsung saja
 *  Echo $NamaVariable.
 */

echo $Variable;



?>
