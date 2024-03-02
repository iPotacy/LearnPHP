<?php

// mysql improved

$server = "localhost";
$usename = "root";
$password = "";
$databasename = "gudangdb";

// buat koneksi
$koneksi = new mysqli("$server", "$usename", "$password", "$databasename");

// periksa koneksinya
if ($koneksi->connect_error)
{
  die("Koneksi kamu gagal" . $koneksi->connect_error);
}