# explode

Fungsi ini  digunakan untuk memecah-mecah suatu string berdasarkan tanda pemisah tertentu dan memasukkan hasilnya kedalam suatu variable array.

```php
<?php
    
    $url = 'marrochi/ganteng/bingit';
    $url = explode('/', $url);

    echo var_dump($url); 
   // array(3) { [0]=> string(8) "marrochi" [1]=> string(7) "ganteng" [2]=> string(6) "bingit" }
    
?>
```

```php
<?php
    
 
$namahari = "minggu senin selasa rabu kamis jumat sabtu";

$hari = explode(" ", $namahari);

echo var_dump($hari);
//  array(7) { [0]=> string(6) "minggu" [1]=> string(5) "senin" [2]=> string(6) "selasa" [3]=> string(4) "rabu" [4]=> string(5) "kamis" [5]=> string(5) "jumat" [6]=> string(5) "sabtu" }
?>

```

```php
$tanggal = "17-05-2010";
list($hari, $bulan, $tahun) = explode('-', $tanggal);;
echo "Hari = $hari";
echo "<br />";
echo "Bulan = $bulan";
echo "<br />";
echo "Tahun = $tahun"; 
```