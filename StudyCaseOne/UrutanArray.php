<?php

$kecilArray = [64, 34, 25, 12, 22, 11, 90];
$besarArray = [64, 34, 25, 12, 22, 11, 90];
rsort($besarArray); // urutan dari yang terbesar
sort($kecilArray); // urutan dari yang terkecil

echo "Array yang telah diurutkan dari yang terbesar: " . implode(', ', $besarArray) . PHP_EOL;
echo "Array yang telah diurutkan dari yang terkecil: " . implode(', ', $kecilArray) . PHP_EOL;