# getdate
Fungsi ge tdate() di gunakan unt uk m engambil ni lai w aktu l okal s ekarang a tau
waktu timestamp dan waktu memasukkannya ke dalam array asosiatif. Sintaksnya
adalah sebagai berikut:
> `getdate([timestamp])`
```
Elemen array yang dapat dipergunakan adalah sebagai berikut:
1. "minutes" = menit
2. "seconds" = detik
3. "mday" = hari dalam satu bulan
4. "hours" = jam, dalam format 24 jam.
5. "wday" = hari dalam satu minggu, numeris, 0 untuk minggu hingga 6 untuk
sabtu
6. "mon" = bulan, numeris.
7. "year" = tahun, numeris.
8. "yday" = hari dalam satu tahun, misalnya "299"
9. "weekday" = hari dalam satu minggu, tekstual penuh, misalnya "Friday"
10. "month" = bulan, tekstual penuh, misalnya "January
```
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h1>
<?php
date_default_timezone_set("Asia/Bangkok");
$sekarang = getdate();
$bulan = $sekarang['month'];
$hari = $sekarang ['mday'];
$tahun = $sekarang ['year'];
$jam = $sekarang['hours'];
$menit = $sekarang['minutes'];
$detik = $sekarang['seconds'];
if ($jam <= 11) {
 echo "Selamat Pagi";
} elseif ($jam > 6 and $jam <= 10) {
 echo "Selamat Siang";
} elseif ($jam > 11 and $jam <= 15) {
 echo "Selamat Sore";
} elseif ($jam > 15) {
 echo "Selamat Malam"; 
}
?>
</h1>
<h2> Selamat datang</h2>
<h3> Sekarang adalah tanggal <?php echo "$hari $bulan
$tahun"; ?></h3> 
<h5><?=  "$jam : $menit  [$detik]"?></h5>
</body>
</html>
```