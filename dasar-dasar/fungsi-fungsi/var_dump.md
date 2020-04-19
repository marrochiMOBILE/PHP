# var_dump

Untuk memastikan tipe data dari sebuah variabel, PHP menyediakan fungsi yang sangat berguna, terutama untuk proses pengujian dan pencarian kesalahan (debugging), yakni fungsi var_dump.
Fungsi var_dump membutuhkan inputan variabel yang akan diperiksa. Berikut contoh penggunaan fungsi var_dump:

```php
<?php
$a= 5; $b=8; $c=4.5;
 
$hasil1=$a+$b;
$hasil2=$a+$c;
$hasil3=$a.$b;
 
echo "$hasil1:"; var_dump($hasil1); //int(13)
echo "<br \>"; // 
echo "$hasil2:"; var_dump($hasil2); //float(9.5)
echo "<br \>";
echo "$hasil3:"; var_dump($hasil3); //string(2) "58" 
?>
```

```php
    
    $url = 'marrochi/ganteng/bingit';
    $url = explode('/', $url);

    echo var_dump($url); 
   // array(3) { [0]=> string(8) "marrochi" [1]=> string(7) "ganteng" [2]=> string(6) "bingit" }
```