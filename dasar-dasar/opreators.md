# opeartors 

Operator melakukan operasi pada variabel dan nilai.

## Arithmetic Operators
Operator aritmatika bekerja dengan nilai numerik untuk melakukan operasi aritmetika umum.

```php
<?php
  $num1 = 8;
  $num2 = 6;

  //Addition
  echo $num1 + $num2; //14

  //Subtraction
  echo $num1 - $num2; //2

  //Multiplication
  echo $num1 * $num2; //48

  //Division
   echo $num1 / $num2; //1.33333333333
?>
```

### Modulus

Operator modulus, diwakili oleh tanda%, mengembalikan sisa pembagian operan pertama oleh operan kedua:

```php
<?php
  $x = 14;
  $y = 3;
  echo $x % $y; // 2
?>
```

> Jika Anda menggunakan angka floating point dengan operator modulus, mereka akan dikonversi ke bilangan bulat sebelum operasi.

## Increment & Decrement

Operator increment digunakan untuk meningkatkan nilai variabel.
Operator penurunan digunakan untuk mengurangi nilai variabel.

> $x++; // equivalent to $x = $x+1;
> $x--; // equivalent to $x = $x-1;


Operator kenaikan dan penurunan mendahului atau mengikuti variabel.

```
$x++; // post-increment 
$x--; // post-decrement 
++$x; // pre-increment 
--$x; // pre-decrement
```


Perbedaannya adalah post-increment mengembalikan nilai asli sebelum ia mengubah variabel, sementara pre-increment mengubah variabel terlebih dahulu dan kemudian mengembalikan nilainya.
Contoh:
```php
<?php
$a  = 2; $b1 = $a++; // $a=3,  $b=2
$a  = 2; $b2 = ++$a; // $a=3,  $b=3

echo $b1; # 2
echo $b2; # 3
?>
```

```php
<?php  
$num = 18; 
$num--;
echo $num; # 17
?>
```

## Assignment Operators

Operator tugas digunakan untuk menulis nilai ke variabel.
```php
$num1 = 5;
$num2 = $num1;
```

$ num1 dan $ num2 sekarang mengandung nilai 5.

Tugas juga dapat digunakan bersama dengan operator aritmatika.
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
$a = 7; $b = 3; 
$a += $b;
echo $a;
?>
```

## Comparison Operators

Operator perbandingan membandingkan dua nilai (angka atau string).
Operator pembanding digunakan di dalam pernyataan bersyarat, dan mengevaluasi menjadi BENAR atau SALAH.

> $x == $y  equal
> $x === $y identical
> $x != $y not equal
> $x <> $y not equal
> $x !== $y not identical


Operator perbandingan tambahan:

> $x > $y greater than
> $x >= $y greater than or equal to
> $x < $y less than 
> $x <= $y less than or equal to
 
