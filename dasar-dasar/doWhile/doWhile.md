# do while 

Loop do ... while akan selalu menjalankan blok kode sekali, memeriksa kondisi, dan mengulangi loop selama kondisi yang ditentukan benar.

```php
do {
  code to be executed;
} while (condition is true); 
```


Terlepas dari apakah kondisinya benar atau salah, kode akan dieksekusi setidaknya satu kali, yang mungkin diperlukan dalam beberapa situasi.

```php
<?php
$i = 1;
do {  echo "Hello"; }
while($i < 0);
?>
```

Contoh di bawah ini akan menulis beberapa output, dan kemudian meningkatkan variabel $ i per satu. Kemudian kondisinya diperiksa, dan loop terus berjalan, selama $ i kurang dari atau sama dengan 7.

```php
<?php
$i = 5;
do {
   echo "The number is " . $i . "<br/>";
   $i++;
} while($i <= 7);

//Output
//The number is 5
//The number is 6
//The number is 7
?>
```

```
Perhatikan bahwa dalam loop do while, kondisi diuji SETELAH mengeksekusi pernyataan dalam loop. Ini berarti bahwa loop do while akan menjalankan pernyataannya setidaknya satu kali, walaupun kondisinya salah saat pertama kali.
```
