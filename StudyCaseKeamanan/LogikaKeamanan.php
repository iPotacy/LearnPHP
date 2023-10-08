<?php

// daftar kata sandi penguna
$password = [
  'user1' => 'password123',
  'user2' => 'securepass',
  'user3' => '123456',
  'user4' => 'strongpassword123'
];

// mencari kata sandi yang sama
$passwordCounts = array_count_values($password);
$duplicatePassword = [];
foreach ($passwordCounts as $password => $count)
{
  if ($count > 1)
  {
    $duplicatePassword[] = $password;
  }
}

// mencari kata sandi yang lemah
$weakPassword = [];
foreach ($weakPassword as $user => $password)
{
  if (strlen($password) < 6 || $password === 'password' || $password === '123456')
  {
    $weakPassword[] = $user;
  }
}

foreach ($weakPassword as $user)
{
  echo "$user kata sandi anda terlalu lemah, silahkan ganti kata sandi anda. <br>";
}

foreach ($duplicatePassword as $password)
{
  echo "beberapa pengguna menggunakan kata sandi yang sama : $password. <br>";
}