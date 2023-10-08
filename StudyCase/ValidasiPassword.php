<?php 

echo "Masukkan password: ";

$password = trim(fgets(STDIN));

if (
    strlen($password) >= 8 && 
    preg_match('/[A-Z]/', $password) && 
    preg_match('/[a-z]/', $password) && 
    preg_match('/[0-9]/', $password)
   )
{
  echo "Password valid.";
} 
else 
{
  echo "Password tidak memenuhi kriteria.";
}