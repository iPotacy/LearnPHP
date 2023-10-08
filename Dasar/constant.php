<?php

// Constant

/** Variable di PHP itu sifatnya mutable (Tidak bisa di Ubah)
 *  Maka sebagai gantinya terdapat fitur Constants
 *  Constants sendiri adalah tempat menyimpan data yang tidak bisa diubah lagi
 *  setelah dideklarasikan
 *  untuk membuatnya kita memerlukan fungsi define()
 *  best practicenya kita menngunakan UPPER_CASE  
 */

 define("VERSION", "PHP ini version ke dua");

 echo "Version: ";
 echo VERSION; // UPPER_CASE

?>