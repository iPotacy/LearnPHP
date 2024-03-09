<?php
/** 
 * Ada ujian di kelasmu dan kamu lulus. Selamat!
 * Tapi Anda adalah orang yang ambisius. 
 * Anda ingin tahu apakah Anda lebih baik dari rata-rata siswa di kelas Anda.

 * Anda menerima array dengan nilai ujian rekan Anda. 
 * Sekarang hitung rata-ratanya dan bandingkan skor Anda!

 * Kembalilah Truejika Anda lebih baik, jika tidak False!

 * Catatan:
 * Poin Anda tidak termasuk dalam rangkaian poin kelas Anda. 
 * Untuk menghitung poin rata-rata, Anda dapat menambahkan poin Anda ke array yang diberikan! 
 */

function betterThanAverage($classPoints, $yourPoints) {
  return $yourPoints > (array_sum($classPoints) / count($classPoints)) ? true : false;
}

$classPoints = [70, 80, 90];
$yourPoints = 85;
echo betterThanAverage($classPoints, $yourPoints) ? 'True' : 'False';

$classPoints = [70, 80, 90];
$yourPoints = 60;
echo betterThanAverage($classPoints, $yourPoints) ? 'True' : 'False';

?>