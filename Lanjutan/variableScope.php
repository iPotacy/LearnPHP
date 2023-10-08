
<?php

// Scope Variable

/** Di PHP, variabel dapat dideklarasikan dimana saja dalam skrip.
 *  Cakupan suatu variabel adalah bagian dari skrip dimana variabel tersebut dapat direferensikan/digunakan.
 *  PHP memiliki tiga cakupan variabel yang berbeda:
 *  1. Lokal
 *  2. Global
 *  3. Static */

// Lingkup Global

global $x;

function myTest() 
{
  $x = 3;
  echo "my number is $x";

} myTest();

// Lingkup Static

/** Kemudian, setiap kali fungsi tersebut dipanggil
 *  variabel tersebut akan tetap memiliki informasi yang terkandung di dalamnya
 *  sejak terakhir kali fungsi tersebut dipanggil. */

function statis ()
{

  static $x = 10;
  echo $x;
  $x++;

} 
statis();
statis();
statis();



?>