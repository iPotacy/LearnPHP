<?php

// Frase yang akan diperiksa
$str = "A mar on a panorama!";

// Fungsi untuk menghapus spasi, tanda baca, dan mengubah huruf menjadi huruf kecil
function prepareString($str)
{
    // Menghapus spasi dan tanda baca
    $cleanedStr = preg_replace("/[^A-Za-z0-9]/", '', $str);
    
    // Mengubah huruf menjadi huruf kecil
    return strtolower($cleanedStr);
}

// Fungsi untuk memeriksa apakah sebuah string adalah palindrom
function isPalindrome($str)
{
    // Membandingkan string dengan string yang dibalikkan
    return prepareString($str) === strrev(prepareString($str));
}

// Memanggil fungsi isPalindrome untuk menguji apakah $x adalah palindrom
$result = isPalindrome($str);

// Mencetak pesan yang sesuai berdasarkan hasil pengujian
if ($result)
{
  echo "\"$str\" adalah palindrom";
} 
else 
{
  echo "\"$str\" bukan palindrom";
}

?>