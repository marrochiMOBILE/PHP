# while

Saat menulis kode, Anda mungkin ingin blok kode yang sama terus berulang. Alih-alih menambahkan beberapa baris kode yang hampir sama dalam sebuah skrip, kita dapat menggunakan loop untuk melakukan tugas seperti ini.

#### The while Loop

Loop sementara mengeksekusi blok kode selama kondisi yang ditentukan benar.
Sintaksis:

```php
while (condition is true) {
   code to be executed;
}
```

Jika kondisi tidak pernah menjadi salah, pernyataan akan terus dieksekusi tanpa batas.

```php
<?php
$i = 1;
while ($i < 7) {
  echo "The value is $i <br />";
  $i++;
}

/*
The value is 1
The value is 2
The value is 3
The value is 4
The value is 5
The value is 6
*/
?>

```

```php
<?php
$i = 1;
while($i <= 15)   {
    echo $i;
    $i++;
}

/*
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
*/
?>


```