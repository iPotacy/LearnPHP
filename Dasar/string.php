<?php 

// STRINGS

/** sejenis data yang berupa teks. 
 *  Teks tersebut dapat berisi karakter alfanumerik - angka maupun huruf. 
 *  Bahasa pemrograman lain pada umumnya bersifat Strongly Typed, 
 *  yaitu setiap variabel pada program tipe datanya tertentu dan tidak dapat diubah. */


// strlen() 

/** Fungsi PHP strlen() menghitung huruf string. */

echo strlen("Hello, indonesia"); // outputny adalah 16

// str_word_count()

/** Fungsi PHP str_word_count() menghitung jumlah kata dalam sebuah string */

echo str_word_count("Hello, indonesia"); // outputnya adalah 2

// strrev()

/** Membalikan kata dalam string */

echo strrev("Hello, indonesia"); // outputnya adalah aisenodni ,olleH

// strpos()

/** Fungsi PHP strpos()mencari teks tertentu dalam sebuah string. 
 *  Jika kecocokan ditemukan, fungsi mengembalikan posisi karakter dari kecocokan pertama. 
 *  Jika tidak ditemukan kecocokan, 
 *  itu akan mengembalikan FALSE. */

echo strpos("Hello mahez!", "mahez"); // outputnya adalah 6

// str_replace()

/** Fungsi PHP str_replace()
 *  menggantikan beberapa karakter dengan beberapa karakter lain dalam sebuah string. */

echo str_replace("indonesia","mahez","Hello indonesia"); // outputnya adalah Hello mahez

// str_split()

/** Fungsi str_split() membagi string menjadi array.
 *  Nilai Parameter = string, lenght
 *  
 */

print_r(str_split("H"));







?>