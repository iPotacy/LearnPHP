<?php

// Fungsi penanganan kesalahan kustom
function customErrorHandler($errno, $errstr, $errfile, $errline )
{
  echo "Terjadi Kesalahan : $errstr di $errfile pada baris $errline";
}

// Menentapkan fungsi penanganan kesalahan kustom
set_error_handler("customErrorHandler");

// Kode yang mungkin menyebabkan kesalahan
// $result = 10 / 0; // Ini akan memunculkan pesan kesalahan yang ditangani oleh customErrorHandler.