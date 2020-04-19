# include n require

## include


Pernyataan sertakan dan butuhkan memungkinkan penyisipan konten dari satu file PHP ke file PHP lain, sebelum server mengeksekusinya.
Termasuk file menyimpan sedikit kerja. Anda dapat membuat file header, footer, atau menu standar untuk semua halaman web Anda. Kemudian, ketika header membutuhkan pembaruan, Anda dapat memperbarui header termasuk file saja.

> Asumsikan bahwa kita memiliki file header standar yang disebut header.php.

```php
<?php
  echo '<h1>Welcome</h1>';
?>
```

> Gunakan pernyataan sertakan untuk menyertakan file header di halaman.


```php
<html>
  <body>

  <?php include 'header.php'; ?>

  <p>Some text.</p>
  <p>Some text.</p>
  </body>
</html>
```

```
Pernyataan sertakan dan butuhkan memungkinkan penyisipan konten dari satu file PHP ke file PHP lain, sebelum server mengeksekusinya.
```

## require

> buat tes2.php
```php
<?php
  echo '<h1>Hello Mother Fucker</h1>';
?>
```
kedua buat tes.php dan jalankan
```php
<html>
  <body>

  <?php require 'tes2.php'; ?>

  <p>Some text.</p>
  <p>Some text.</p>
  </body>
</html>
```
## include vs require


Pernyataan persyaratan identik untuk dimasukkan, dengan pengecualian bahwa, setelah gagal, ia menghasilkan kesalahan fatal.
Ketika file dimasukkan menggunakan pernyataan sertakan, tetapi PHP tidak dapat menemukannya, skrip terus dijalankan.
Jika diperlukan, skrip akan berhenti eksekusi dan menghasilkan kesalahan.

> require => Gunakan mengharuskan ketika file diperlukan untuk menjalankan aplikasi.
> include => Gunakan sertakan ketika file tidak diperlukan. Aplikasi harus dilanjutkan, bahkan ketika file tidak ditemukan.