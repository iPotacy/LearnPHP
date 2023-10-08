<?php

 // Pernyataan Kondisional PHP

 /** Di PHP kami memiliki pernyataan kondisional berikut:
  *  if pernyataan - mengeksekusi beberapa kode jika satu kondisi benar
  *  if else pernyataan - mengeksekusi kode jika kondisi benar dan kode lain jika kondisi salah */

  // PHP - Pernyataan if

  /** Pernyataan tersebut ifmengeksekusi beberapa kode jika satu kondisi benar. */

  // sintaksis

  // if (kondisi) 
  // {
  //   masukkan pernyataan jika kondisi ini benar;
  // }

  $x = 0;

  if ($x <= 1)
  {
    echo "kamu terbaik";
  }

  // PHP - Pernyataan if...else

  /** Pernyataan tersebut if...else 
   *  mengeksekusi beberapa kode jika suatu kondisi benar 
   *  dan kode lain jika kondisi tersebut salah. */

  // Sintaksis

  // if (kondisi) 
  // {
  //   masukkan pernyataan jika kondisi ini benar;
  // } 
  // else 
  // {
  //   masukkan pernyataan jika kondisi ini salah;
  // }

  if ($x == 1)
  {
    echo "kamu terbaik";
  }
  else 
  {
    echo "kamu terburuk";
  }

  $t = date("H");

  if ($t < "10") 
  {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }

?>