<?php 

// Operator aritmatika

/** Terdapat operator tambah ( + )
 *  Terdapat operator kurang ( - )
 *  Terdapat operator kali ( * )
 *  Terdapat operator bagi ( / )
 *  Terdapat operator modulus ( % ) atau sisa bagi
 */

echo 1 + 1;
echo 1 - 1;
echo 1 * 1;
echo 1 / 1;
echo 1 % 1;

// Operator dengan menambahkan Variable

$x = 10;
$y = 20;

echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;

// Operator penggabung String

/** biasa disebut Concatenation atau concat.
 *  dan ini mempunya oporator yaitu tanda titik ( . )
 *  kalau di JavaScript itu tanda plus ( + )
 */

$nama_depan = "Mahez";
$nama_belakang = "Arya";

echo $nama_depan . " " . $nama_belakang; // Jika ingin terdapat spacing
echo $nama_depan . $nama_belakang;

// Operator Assignment

/** yaitu artinya operator penugasan
 *  yang mana terdapat ; 
 *  (tanda = ) (tanda += ) (tanda -= ) (anda *= ) (tanda %= ) (tanda .= ) 
 *  bagaimana cara penggunaannya ? 
 */

/** jika dalam assignment +=, -=, *=, %=.
 *  maka harus berisikan tipe data integer
 *  jika menggunakan tipe data string maka terjadi ERROR
 *  tetapi jika menggunakan assignment .= maka tidak terjadi ERROR
 *  karena tanda titik sendiri adalah penggabungan
 */

/** 
 * tanda = pada PHP digunakan untuk memberikan nilai pada variabel, 
 * bukan untuk menampilkan nilai variabel.
 */
$angka = "2"; 
$angka += "4";
echo $angka; // Maka outputnya adalah 6

$nama = "Mahez";
$nama .= "Arya";
echo $nama; // Maka outputnya adalah MahezArya

// Operator perbandingan 

/**  yang mana terdapat tanda
 *  ( < ) ( > ) ( <= ) ( >=) ( == ) ( != )
 *  tipe operator ini hanya mengecheck nilainya saja sama atau tidak 
 *  jadi tidak mengecheck tipe datanya.
 *  biasanya dipakai jika kita membuat pengkondisian  
*/

var_dump(2 < 5); // output adalah bool(true)
var_dump(2 > 5); // output adalah bool(false)
// == mengembalikan nilai true jika kedua operan sama.
var_dump(2 == "2"); // output adalah bool(true)
var_dump(2 == 3); // output adalah bool(false)

// Operator Increments dan decrement

/** " ++ ": Increment (menambah nilai sebanyak 1) 
 *  " -- ": Decrement (mengurangi nilai sebanyak 1)
*/

$nilai = 7;
$nilai++; // maka outputnya akan ditambah 1
$nilai--; // maka outputnya akan dikurangi 1 

// Operator identitas

/** yang mana terdapat
 *  ( === ) ( !==)
 *  tipe operator ini tidak hanya mengecheck nilainya 
 *  tetapi juga tipe datanya, sama atau tidak.
 *  jadi jika kalian ingin mengecheck benar-benar tipe datanya
 *  gunakan tanda operator identitas
 */

var_dump(2 === "2"); // output adalah bool(false)

// Operator Logical 

/** yang mana terdapat 
 *  && (and), || (or), ! (not)
 *  ini juga sama biasa dipake untuk pengkondisian
 */


// logika && 

/** untuk mengecheck bilangan genap 
 *  kita bisa menggunakan 
 *  $namaVariable % 2 == 0
 */

1 !== 2 && 2 > 2; //false

$y = 30;

var_dump( $y < 20 && $x % 2 == 0); // output adalah bool(false)
// karena salah satu kondisi adalah false

$x = 10;

var_dump( $x < 20 && $x % 2 == 0); // output adalah bool(true)
/** jadi apakah 
 *  nilai x lebih kecil dari 20 dan apakah 10 bilangan genap ?
 *  jadi apakah 10 dibagi 2 sisanya 0 ? 
 * 
 *  ini karena 2 kondisi perbadingan itu
 *  harus true kalau pakai operator logika &&
 *  jadi harus sama-sama benar
 */ 

// logika || 

$z = 30;

var_dump( $z < 20 || $x % 2 == 0); // output adalah bool(true)
/** menggapa bisa true ?
 *  karena 10 adalah bilangan genap
 *  tetapi 30 lebih besar dari 20.
 *  
 *  jadi logika || (or) hanya cukup satu saja yang true
 *  maka nilainya juga pasti true
 */

// Not !

$not = true;
!$not; // false

/** Mendeteksi jika operan tidak sama */

1 != 1; // false
1 != '1'; // false
1 != 2; // true

/** Mendeteksi jika operan tidak identik */

1 !== 1; // false 
1 !== '1'; // true

// Operator Ternary 

/**  Menggantikan struktur if-else 
 *  dengan sebuah ekspresi yang menghasilkan nilai berdasarkan kondisi. 
 *  ' Condition ? Value1 : Value2 ; '
 *  adalah ekspresi kondisional yang dievaluasi, 
 *  value1 adalah nilai yang akan digunakan jika kondisi benar (true), 
 *  dan value2 adalah nilai yang akan digunakan jika kondisi salah (false).*/


$anak = 18; 
$status = ( $anak <= 21 ) ? "Remaja" : "Dewasa";
echo $status;




?>