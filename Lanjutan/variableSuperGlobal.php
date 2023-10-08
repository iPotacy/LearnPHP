<?php 

// Variabel SuperGlobaL

/** Variabel superglobal ini sering digunakan dalam pengembangan web 
 *  untuk menerima input pengguna, mengirim data ke server, 
 *  dan mengakses informasi lingkungan. 
 *  Anda dapat mengimplement
 *  Perhatikan bahwa Anda harus berhati-hati 
 *  dalam memvalidasi dan membersihkan data yang diterima dari variabel superglobal 
 *  untuk mencegah serangan keamanan seperti serangan injeksi SQL atau cross-site scripting (XSS). */

/** Variabel SuperGlobaL dalam PHP 
 *  adalah variabel yang tersedia di seluruh lingkungan PHP 
 *  dan dapat diakses dari mana saja dalam skrip Anda. 
 *  Mereka adalah variabel global yang secara otomatis didefinisikan oleh PHP 
 *  untuk menyimpan informasi yang penting dalam pengembangan web. */

// $_GET

// URL: example.com?nama=John&umur=25
echo $_GET['nama']; // Output: John
echo $_GET['umur']; // Output: 25
/** Pada contoh di atas, $_GET['nama'] akan mengembalikan nilai "John" 
 *  dan $_GET['umur'] akan mengembalikan nilai 25. */


// $_POST 

/** Variabel ini digunakan untuk mengakses data yang dikirimkan melalui metode POST. 
 *  Data ini dikirimkan melalui formulir HTML atau permintaan HTTP POST. 
 *  Contoh penggunaan: */

// Form: <form method="POST" action="proses.php">
// <input type="text" name="nama">
// <input type="text" name="umur">
// </form>

echo $_POST['nama']; // Output: nilai yang dikirim melalui input "nama"
echo $_POST['umur']; // Output: nilai yang dikirim melalui input "umur"
/** Anda perlu memastikan bahwa form HTML menggunakan metode POST 
 *  dan tujuan aksi (action) mengarah ke skrip PHP yang memproses data formulir. */


// $_REQUEST

/** Variabel ini menggabungkan nilai-nilai dari $_GET, $_POST, dan $_COOKIE. 
 *  Variabel ini dapat digunakan untuk mengakses data 
 *  yang dikirimkan melalui metode GET atau POST tanpa memperhatikan metode pengiriman data. */

// URL: example.com?nama=John
echo $_REQUEST['nama']; // Output: John

// Form: <form method="POST" action="proses.php">
// <input type="text" name="nama">
// </form>
echo $_REQUEST['nama']; // Output: nilai yang dikirim melalui input "nama"
/** Pada contoh di atas, $_REQUEST['nama'] akan mengembalikan nilai "John" 
 *  dalam metode GET dan nilai yang dikirim melalui input "nama" dalam metode POST */


// $_SERVER

/** Variabel ini menyimpan informasi tentang server dan lingkungan eksekusi PHP. 
 *  Variabel ini dapat digunakan untuk mengakses informasi seperti alamat IP pengguna, 
 *  direktori file skrip PHP, nama server, dan banyak lagi */

echo $_SERVER['REMOTE_ADDR']; // Output: Alamat IP pengguna yang mengakses halaman
echo $_SERVER['DOCUMENT_ROOT']; // Output: Path ke direktori root dokumen
/** $_SERVER menyimpan banyak informasi lainnya, 
 *  dan Anda dapat merujuk ke dokumentasi resmi PHP untuk informasi lebih lanjut. */




?>