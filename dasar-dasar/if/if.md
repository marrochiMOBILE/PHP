# if
### Conditional Statements

Pernyataan bersyarat melakukan tindakan berbeda untuk keputusan yang berbeda.
Pernyataan if else digunakan untuk mengeksekusi kode tertentu jika suatu kondisi benar, dan kode lain jika kondisinya salah.

```php
if (condition) {
   code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}
```

Anda juga dapat menggunakan pernyataan if tanpa pernyataan else, jika Anda tidak perlu melakukan apa-apa, jika kondisinya salah.

```php
if($age >  18) {
echo  "Welcome";
}
```

### If Else
Contoh di bawah ini akan menampilkan jumlah terbesar dari keduanya

```php
<?php
$x = 10;
$y = 20;
if ($x >= $y) {
   echo $x;
} else {
   echo $y;
}

// Outputs "20"
?>
```

### The Elseif Statement

Gunakan pernyataan if ... elseif ... else untuk menentukan kondisi baru untuk diuji, jika kondisi pertama salah.

```php
if (condition) {
  code to be executed if condition is true;
} elseif (condition) {
  code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}
```

Anda dapat menambahkan pernyataan lain jika Anda mau. Catat saja, bahwa pernyataan elseif harus dimulai dengan pernyataan if.

```php
<?php
$age = 21;

if ($age<=13) {
   echo "Child.";
} elseif ($age>13 && $age<19) {
   echo "Teenager";
} else {
   echo "Adult";
}

//Outputs "Adult"
?>
```

```php
Kami menggunakan operator logika AND (&&) untuk menggabungkan kedua kondisi dan memeriksa untuk menentukan apakah $ age adalah antara 13 dan 19.
Kurung kurawal dapat dihilangkan jika hanya ada satu pernyataan setelah if / elseif / else.
Sebagai contoh:
if ($ age <= 13)
gema "Anak";
lain
gema "Dewasa";
```