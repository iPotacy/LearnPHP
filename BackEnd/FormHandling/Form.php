<?php

// Fungsi untuk membersihkan input dari pengguna
function clean_input($data)
{
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Fungsi untuk menghindari SQL Injection
function secure_query($conn, $input)
{
  return mysqli_real_escape_string($conn, $input);
}

// Mengambil data dari formulir
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'form_handling');

  $username = clean_input($_POST["username"]);
  $password = clean_input($_POST["password"]);

  // Koneksi ke databse { contoh menggunakan MySQLi}
  $conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (!$conn)
  {
    die("Koneksi gagal: " . mysqli_connect_error());
  }

  // Menghindari SQL Injection
  $username = secure_query($conn, $username);
  $password = secure_query($conn, $password);

  // Query unutk mengautentikasi pengguna
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  
  $result = mysqli_query($conn, $sql);

  if (!$result)
  {
    die ("Kesalahan query : " . mysqli_error($conn));
  }

  echo "Jumlah baris yang ditemukan: " . mysqli_num_rows($result);

  if (mysqli_num_rows($result) == 1)
  {
    // Penguna berhasil diautentikasi, lanjutkan ke halaman selanjutnya
    echo "Selamat datang, $username!";
  }
  else
  {
    // Gagall autentikasi
    echo "Gagal login. Coba lagi.";
  }
  // Tutup koneksi database
  mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username : <input type="text" name="username"><br>
    password : <input type="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>