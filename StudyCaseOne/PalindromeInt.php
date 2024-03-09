<?php 

// Menentukan variabel $x dengan nilai 121
$x = "121";

// Fungsi untuk memeriksa apakah angka adalah palindrom
function isPalindrome($x)
{
  // Variabel untuk menyimpan angka yang dibalik
  $reversed = '';
  // Melakukan iterasi pada setiap digit angka
  foreach (str_split(strval($x)) as $angka)
  {
  // Menambahkan digit ke variabel yang dibalik
  $reversed = $angka . $reversed;
  }
  // Membandingkan angka yang dibalik dengan angka asli
  return $reversed === strval($x);
}

// Memanggil fungsi isPalindrome untuk menguji apakah $x adalah palindrom
$result = isPalindrome($x);

// Mencetak pesan yang sesuai berdasarkan hasil pengujian
if ($result)
{
  echo "$x adalah palindrom";
} 
else 
{
  echo "$x bukan palindrom";
}

?>