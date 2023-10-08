<?php

/** Array adalah nilai yang dikelompokan
 *  berdasarkan nama umum
 *  Saya dapat mendefinisikan array kosong
 *  2 cara yang berbeda.
 */

$list = [];
var_dump($list = array());

// Sebuah array dapat diinisialisasi dengan nilai

$list = [1, 2];
var_dump($list = array(1, 2));

// Array dapat menampung nilai jenis apa pun:

var_dump($list = [1, 'test']);

// Bahkan array lainnya:

var_dump($list = [1, [2, 'test']]);

// Anda dapat mengakses elemen dalam array menggunakan notasi ini:

$list = ['a', 'b'];
$list[0]; //'a' 
$list[1]; //'b'

/** Setelah array dibuat, 
 *  Anda dapat menambahkan nilai ke dalamnya dengan cara ini 
 */

$list = ['a', 'b'];
$list[] = 'c';

/*
$list == [
  "a",
  "b",
  "c",
]
*/

/** Anda dapat menggunakan array_unshift()
 *  untuk menambahkan item di awal array: 
 */

$list = ['b', 'c'];
array_unshift($list, 'a');

/*
$list == [
  "a",
  "b",
  "c",
]
*/

/** Hitung berapa banyak item dalam array 
 *  menggunakan fungsi bawaan count(): 
 */

$list = ['a', 'b'];

count($list); //2

/** Periksa apakah array berisi item
 *  menggunakan in_array()fungsi bawaan:
 */

$list = ['a', 'b'];

in_array('b', $list); //true


?>