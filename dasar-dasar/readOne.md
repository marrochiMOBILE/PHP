# WELCOME TO PHP


PHP: Hypertext Preprocessor (PHP) adalah bahasa scripting open source gratis, sangat populer. Script PHP dieksekusi di server.

Hanya daftar singkat tentang kemampuan PHP:
- Menghasilkan konten halaman dinamis
- Membuat, membuka, membaca, menulis, menghapus, dan menutup file di server
- Mengumpulkan data formulir
- Menambah, menghapus, dan memodifikasi informasi yang tersimpan di database Anda
- Mengontrol akses pengguna
- mengenkripsi data
- dan banyak lagi!

Sebelum memulai tutorial ini, Anda harus memiliki pemahaman dasar tentang HTML

```
PHP memiliki kekuatan yang cukup untuk bekerja di inti WordPress, sistem blogging tersibuk di web. Ia juga memiliki tingkat kedalaman yang diperlukan untuk menjalankan Facebook, jejaring sosial terbesar web!
```

## Why PHP

PHP berjalan pada banyak, berbagai platform, termasuk Windows, Linux, Unix, Mac OS X, dan sebagainya.
PHP kompatibel dengan hampir semua server modern, seperti Apache, IIS, dan banyak lagi.
PHP mendukung berbagai macam basis data.
PHP gratis!
>PHP mudah dipelajari dan berjalan secara efisien di sisi server.

## php syntax


Script PHP dimulai dengan <? Php dan diakhiri dengan?>:

```php
<?php

// isi

?>
```

Berikut adalah contoh file PHP sederhana. Skrip PHP menggunakan fungsi bawaan yang disebut "echo" untuk menampilkan teks "Hello World!" ke halaman web.

```php
<html>
  <head>
    <title>My First PHP Page</title>
  </head>
  <body>
  <?php   
    echo "Hello World!";
  ?>
 </body>
</html>
```

Sebagai alternatif, kami dapat menyertakan PHP dalam tag `<script>` HTML.
```php
<html>
  <head>
    <title>My First PHP Page</title>
  </head>
  <body>
  <script language="php">
    echo "Hello World!";
  </script>
  </body>
</html>
```

Namun, versi terbaru PHP menghilangkan dukungan untuk tag `<script language = "php">`. Karena itu, sebaiknya gunakan `<? Php?>` Secara eksklusif


### Anda juga dapat menggunakan tag PHP steno, <? ?>, asalkan didukung oleh server.

```php
<?
    echo "Hello World!";
?>
```

## echo
PHP memiliki fungsi "echo" bawaan, yang digunakan untuk menampilkan teks.
Sebenarnya, itu bukan fungsi; itu adalah konstruksi bahasa. Karena itu, tidak memerlukan tanda kurung.

Mari kita output teks.

```php
<?php
    echo "I love PHP!";
?>
```
Setiap pernyataan PHP harus diakhiri dengan tanda titik koma.

#### Markup HTML dapat ditambahkan ke teks dalam pernyataan echo

```php
<?php
   echo "<strong>This is a bold text.</strong>";
?>
```

## Comments
Dalam kode PHP, komentar adalah baris yang tidak dieksekusi sebagai bagian dari program. Anda dapat menggunakan komentar untuk berkomunikasi dengan orang lain sehingga mereka mengerti apa yang Anda lakukan, atau sebagai pengingat untuk diri sendiri tentang apa yang Anda lakukan.

Komentar satu baris dimulai dengan //:

```php
<?php 
  // ini komentar yg tidak di eksekusi
 echo "aku sayang kamu";
?>
```

### Multi-Line Comments
Komentar multi-baris digunakan untuk menulis komentar yang membutuhkan lebih dari satu baris.
Komentar multi-baris dimulai dengan / * dan diakhiri dengan * /.

```php
<?php   
  echo "<p>Hello World!</p>";
   /*
   This is a multi-line comment block
   that spans over
   multiple lines
   */
   echo "<p>I am learning PHP!</p>";
   echo "<p>This is my first program!</p>";
?>
```

```
Menambahkan komentar saat Anda menulis kode adalah praktik yang baik. Ini membantu orang lain memahami pemikiran Anda dan membuatnya lebih mudah bagi Anda untuk mengingat kembali proses pemikiran Anda ketika Anda merujuk pada kode Anda nanti.
```