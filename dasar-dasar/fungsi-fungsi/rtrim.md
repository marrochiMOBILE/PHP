# rtrim 
Fungsi rtrim() ini berfungsi untuk menghilangkan spasi dan karakter dari suatu variabel dari satu sisi juga, yaitu dari sisi sebelah kanan.

```php
<?php
    
    $url = 'marrochi/ganteng/bingit/';
    $url = rtrim($url, '/');

    echo $url; // marrochi/ganteng/bingit


?>
```

```php
<?php
    
    $url = 'marrochi/ganteng/bingit/';
    $urlSimpan = rtrim($url, '/');

    echo $urlSimpan; // marrochi/ganteng/bingit


?>
```

bisa jugha menggunakan satu  parameter untuk menghapus space

```php
$nama = rtrim('ochi x          ');
$nama1 = 'ochi x         ';
echo strlen($nama).'<br>'; // 6
echo strlen($nama1); // 15
```