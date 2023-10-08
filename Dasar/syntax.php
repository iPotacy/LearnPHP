<?php

// PHP DASAR

/** Echo ataua Print
 *  Biasa digunakan untuk mencetak variable, tulisan dll 
 */

 /** dalam echo penggunaan kutip menunjukan dia string, 
  *  tetapi jika kita ingin mengunakan integer 
  *  maka tidak boleh menggunakan tanda kutif
  */ 
echo "Mahez arya"; 


print "Mahez arya";

/** Print_r() ( Bisa mencetak string dan array )
 *  Khusus untuk mencetak isi dari array
*/
print_r("Mahez arya");

/** Var_dump() (Data yang ingin dilihat)
 *  Digunakan untuk melihat isi dari type data, 
 *  nanti akan tampil isi dari variable tersebut 
 */
var_dump("Mahez arya"); // Outputnya adalah = String(10) Mahez arya

/** Dalam konteks PHP, fungsi unset() 
 *  digunakan untuk menghapus variabel atau elemen array tertentu. 
 *  Ketika kamu menggunakan unset() pada variabel, 
 *  variabel tersebut akan dihapus dan tidak lagi tersedia dalam lingkup saat ini. 
 *  Selain itu, unset() juga dapat digunakan 
 *  untuk menghapus elemen-elemen tertentu dalam sebuah array. */

$saya = "John Doe";
$umur = 25;
 
unset($nama); // Menghapus variabel $nama
 
echo $saya; // Akan menghasilkan Notice: Undefined variable: nama
 
echo $umur; // Akan tetap menghasilkan nilai 25
 


?>



