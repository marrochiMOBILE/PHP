# predefined Variables

Superglobal adalah variabel standar yang selalu dapat diakses, terlepas dari ruang lingkupnya. Anda dapat mengakses superglobals PHP melalui fungsi, kelas, atau file apa pun.


> Variabel superglobal PHP adalah $ _SERVER, $ GLOBALS, $ _REQUEST, $ _POST, $ _GET, $ _FILES, $ _ENV, $ _COOKIE, $ _SESSION.

# $_SERVER
$ _SERVER adalah array yang menyertakan informasi seperti header, path, dan lokasi skrip. Entri dalam array ini dibuat oleh server web.
$ _SERVER ['SCRIPT_NAME'] 

```php
<?php
echo $_SERVER['SCRIPT_NAME'];
/// phpDasarOchi/tes.php
?>
```

```php

<?php
  $addr = $_SERVER['SCRIPT_NAME'];
  echo $addr;
  
  // /phpDasarOchi/tes.php
?>
```

## $_SERVER ['HTTP_HOST'] mengembalikan header Host dari permintaan saat ini.

```php
<?php
echo $_SERVER['HTTP_HOST'];
//Outputs "localhost"
?>
```
Metode ini dapat berguna ketika Anda memiliki banyak gambar di server Anda dan perlu mentransfer situs web ke host lain. Alih-alih mengubah jalur untuk setiap gambar, Anda dapat melakukan hal berikut:
###### Buat file tes2.php, yang menyimpan path ke gambar Anda:
```php
<?php
$host = $_SERVER['HTTP_HOST'];
$img = $host.'/phpDasarOchi/img/';
?>
```

#### jalankan di tes.php
```php
<?php
require 'tes2.php';
echo '<img src="'.$img.'1.jpg"  width="200" height="200"/>';

echo "<br/> ini linknya boy : $img"
// ini linknya boy : localhost/phpDasarOchi/img/
?>
```

## Session Variables

Dengan menggunakan sesi, Anda dapat menyimpan informasi dalam variabel, untuk digunakan di beberapa halaman.
Informasi tidak disimpan di komputer pengguna, seperti halnya dengan cookie.
Secara default, variabel sesi bertahan hingga pengguna menutup browser.

#### Start a PHP Session

Sesi mulai menggunakan fungsi session_start ().
Gunakan PHP global $ _SESSION untuk mengatur variabel sesi.

```php
<?php
// Start the session
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>
```
Sekarang, variabel sesi warna dan nama dapat diakses di beberapa halaman, di seluruh sesi.
> Fungsi session_start () harus menjadi hal pertama dalam dokumen Anda. Sebelum ada tag HTML.


Halaman lain dapat dibuat yang dapat mengakses variabel sesi yang kita atur di halaman sebelumnya:
```php
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Your name is " . $_SESSION['name'];
// Outputs "Your name is John"
?>
</body>
</html>
```

## Cookies

Cookie sering digunakan untuk mengidentifikasi pengguna. Cookie adalah file kecil yang ditanamkan server pada komputer pengguna. Setiap kali komputer yang sama meminta halaman melalui browser, itu akan mengirim cookie juga. Dengan PHP, Anda dapat membuat dan mengambil nilai cookie.

#####  Buat cookie menggunakan fungsi setcookie ():
> setcookie(name, value, expire, path, domain, secure, httponly);

name: Menentukan nama cookie
value: Menentukan nilai cookie
expire: Menentukan (dalam detik) kapan cookie akan kedaluwarsa. Nilai: waktu () + 86400 * 30, akan menetapkan cookie akan kedaluwarsa dalam 30 hari. Jika parameter ini dihilangkan atau diatur ke 0, cookie akan kedaluwarsa pada akhir sesi (ketika browser ditutup). Standarnya adalah 0.
jalur: Menentukan jalur server cookie. Jika disetel ke "/", cookie akan tersedia di seluruh domain. Jika diatur ke "/ php /", cookie hanya akan tersedia dalam direktori php dan semua sub-direktori php. Nilai default adalah direktori saat ini di mana cookie sedang diatur.
domain: Menentukan nama domain cookie. Untuk membuat cookie tersedia di semua subdomain di example.com, setel domain ke "example.com".
secure: Menentukan apakah cookie hanya boleh dikirim melalui koneksi HTTPS yang aman. BENAR menunjukkan bahwa cookie hanya akan ditetapkan jika koneksi aman ada. Standarnya adalah SALAH.
httponly: Jika diatur ke TRUE, cookie hanya akan dapat diakses melalui protokol HTTP (cookie tidak akan dapat diakses oleh bahasa scripting). Menggunakan httponly membantu mengurangi pencurian identitas menggunakan serangan XSS. Standarnya adalah SALAH.

> Parameter nama adalah satu-satunya yang diperlukan. Semua parameter lainnya bersifat opsional.

Contoh berikut membuat cookie bernama "pengguna" dengan nilai "John". Cookie akan kedaluwarsa setelah 30 hari, yang ditulis sebagai 86.400 * 30, di mana 86.400 detik = satu hari. Tanda '/' berarti bahwa cookie tersedia di seluruh situs web.

Kami kemudian mengambil nilai cookie "pengguna" (menggunakan variabel global $ _COOKIE). Kami juga menggunakan fungsi isset () untuk mengetahui apakah cookie disetel:

```php
<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>
```