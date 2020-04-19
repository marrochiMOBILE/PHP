# variables

Variabel digunakan sebagai "wadah" tempat kami menyimpan informasi.
Variabel PHP dimulai dengan tanda dolar ($), yang diikuti oleh nama variabel.

> $variable_name = value;

Aturan untuk variabel PHP:
- Nama variabel harus dimulai dengan huruf atau garis bawah
- Nama variabel tidak dapat dimulai dengan angka
- Nama variabel hanya dapat berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan _)
- Nama variabel peka huruf besar-kecil ($ name dan $ NAME akan menjadi dua variabel berbeda)

Sebagai contoh:
```php
<?php
<?php
   $name = 'John';
   $age = 25;
   $NAME = "rika";
   echo $name;
   echo '<br>namaku adalah '.$NAME;
   echo '<br>umurku adalah ' . $age; 
  
?>
```
output
```
John
namaku adalah rika
umurku adalah 25
```

Pada contoh di atas, perhatikan bahwa kami tidak harus memberi tahu PHP tipe data variabelnya.
PHP secara otomatis mengkonversi variabel ke tipe data yang benar, tergantung nilainya.

## Constants


Konstanta mirip dengan variabel kecuali bahwa mereka tidak dapat diubah atau tidak didefinisikan setelah didefinisikan.
Mulailah nama konstanta Anda dengan huruf atau garis bawah.
Untuk membuat konstanta, gunakan fungsi define ():


> define (name, value, case-sensitive)

#### Parameter:
1. name: Menentukan nama konstanta;
1. value: Menentukan nilai konstanta;
1. case-insensitive: Menentukan apakah nama konstan harus case-insensitive. Default salah;

Contoh di bawah ini menciptakan konstanta dengan nama case-sensitive:

```php
<?php
  define("MSG", "Hi SoloLearners!");
  echo MSG;

   // Outputs "Hi SoloLearners!"
?> 
```

Contoh di bawah ini membuat konstanta dengan nama case-insensitive:

```php
<?php
  define("MSG", " Hi SoloLearners!", true);
  echo msg;

  // Outputs "Hi SoloLearners!"
?>
```

## Data Types


Variabel dapat menyimpan berbagai tipe data.
Jenis data yang didukung oleh PHP: String, Integer, Float, Boolean, Array, Object, NULL, Resource.

### String PHP
String adalah urutan karakter, seperti "Halo dunia!"
Sebuah string dapat berupa teks apa pun dalam tanda kutip tunggal atau ganda.

```php
<?php
  $string1 = "Hello world!"; //double quotes
  $string2 = 'Hello world!';  //single quotes
?>
```
Anda dapat menggabungkan dua string menggunakan operator gabungan titik (.).
Misalnya: echo $ s1. $ s2


### Integer PHP
Integer adalah bilangan bulat (tanpa desimal) yang harus sesuai dengan kriteria berikut:
- Tidak boleh mengandung koma atau kosong
- Tidak boleh memiliki titik desimal
- Ini bisa positif atau negatif

```php
<?php
  $int1 = 42; // positive number
  $int2 = -42; // negative number
?>
```

### PHP Float


Float, atau angka floating point, adalah angka yang menyertakan titik desimal.

```php
<?php
  $x = 42.168;
?>
```

### PHP Boolean
Boolean mewakili dua kemungkinan kondisi: BENAR atau SALAH.
```php
<?php
  $x = true; $y = false;
?>
```


> Boolean sering digunakan dalam pengujian bersyarat, yang akan dibahas nanti dalam kursus.


Sebagian besar tipe data dapat digunakan dalam kombinasi satu sama lain. Dalam contoh ini, string dan integer disatukan untuk menentukan jumlah dua angka.

```php
<?php
  $str = "10";
  $int = 20;
  $sum = $str + $int;
  $sum2 = $str . $int;
  echo ($sum); // 30
  echo ($sum2); // 1020

  
?>
```

```php
<?php
$num = 9;
$num = $num%2; # 1 
?>
```

```php
<?php
 $x = 50;
 $x += 100;
 echo $x;

 // Outputs: 150
?> 
```
```php
<?php
$myArray[0] = "John";
$myArray[1] = "<strong>PHP</strong>";
$myArray[2] = 21;

echo "$myArray[0] is $myArray[2] and knows $myArray[1]";

// Outputs "John is 21 and knows PHP"
?>
```
## variables scope

Variabel PHP dapat dideklarasikan di mana saja dalam skrip.
Ruang lingkup variabel adalah bagian dari skrip di mana variabel dapat dirujuk atau digunakan.

Lingkup variabel PHP yang paling banyak digunakan adalah lokal, global.
Variabel yang dinyatakan di luar fungsi memiliki cakupan global.
Variabel yang dideklarasikan dalam suatu fungsi memiliki cakupan lokal, dan hanya dapat diakses di dalam fungsi itu.

Perhatikan contoh berikut.

```php
<?php
  $name = 'David';
  function getName() {
    echo $name;
  }
  getName();

  // Error: Undefined variable: name
?>
```

```php
<?php 
$num1 = 56;
function  my_func() {
  $num1 = 89;
  echo $num1;
}
my_func(); // 89
?>
```
Skrip ini akan menghasilkan kesalahan, karena variabel $ name memiliki cakupan global, dan tidak dapat diakses dalam fungsi getName (). Ketuk terus untuk melihat bagaimana fungsi dapat mengakses variabel global.

> Fungsi akan dibahas dalam pelajaran mendatang.

## The global Keyword

Kata kunci global digunakan untuk mengakses variabel global dari dalam suatu fungsi.
Untuk melakukan ini, gunakan kata kunci global dalam fungsi, sebelum variabel.

```php
<?php
  $name = 'David';
  function getName() {
    global $name;
    echo $name;
  }
  getName();

  //Outputs 'David'
?>
```

Ketuk Coba Sendiri untuk bermain-main dengan kode!

## Variable Variables

Dengan PHP, Anda dapat menggunakan satu variabel untuk menentukan nama variabel lain.
Jadi, variabel variabel memperlakukan nilai variabel lain sebagai namanya.

Sebagai contoh:

```php
<?php
  $a = 'hello';
  $hello = "Hi!";
  echo $$a; 

  // Outputs 'Hi!'
?>
```
```php
<?php 
  $Hello = "World";
  $a = "Hello";
  echo $$a; # World
?>
```
```php
<?php 
  $Hello = "World";
  $a = "Hello";
  echo $$a; 
  $Hello2 = "Worldkkkkkkkk";
  $a2 = "Hello2";
  echo $$a2; // Worldkkkkkkkk
?>
```

$$ a adalah variabel yang menggunakan nilai variabel lain, $ a, sebagai namanya. Nilai $ a sama dengan "halo". Variabel yang dihasilkan adalah $ halo, yang memegang nilai "Hai!".