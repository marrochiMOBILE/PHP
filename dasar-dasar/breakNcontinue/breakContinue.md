# break and continue

### The break Statement

Seperti dibahas dalam pelajaran sebelumnya, pernyataan istirahat digunakan untuk keluar dari sakelar ketika sebuah kasus cocok.
Jika tidak ada istirahat, kode terus berjalan. Sebagai contoh:

```php
<?php
$x=1;
switch ($x) {
  case 1:
    echo "One";
  case 2:
    echo "Two";
  case 3:
    echo "Three";
  default:
    echo "No match";
}

//Outputs "OneTwoThreeNo match"
?>
```
> Break juga dapat digunakan untuk menghentikan eksekusi for, foreach, while, do-while.

```
Pernyataan break mengakhiri arus untuk, foreach, while, do-while atau switch dan terus menjalankan program pada baris yang muncul setelah loop.
Pernyataan istirahat di bagian luar program (mis., Bukan di loop kontrol) akan menghentikan skrip.
```

```php
for ($i=0;$i<=50;$i++)  {
  echo $i;
  if ($i==5) {
    break;
  }
}
```

### The continue Statement
Ketika digunakan dalam struktur looping, pernyataan terus memungkinkan untuk melompati sisa-sisa iterasi loop saat ini. Kemudian melanjutkan eksekusi pada evaluasi kondisi dan beralih ke awal iterasi berikutnya.

Contoh berikut melewatkan angka genap dalam for loop:

```php
<?php
for ($i=0; $i<10; $i++) {
  if ($i%2==0) {
    continue;
  }
  echo $i . ' ';
}

//Output: 1 3 5 7 9
?>
```

> Anda dapat menggunakan pernyataan lanjut dengan semua struktur pengulangan.