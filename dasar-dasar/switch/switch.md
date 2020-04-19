# switch

Pernyataan switch adalah alternatif untuk pernyataan if-elseif-else.
Gunakan pernyataan beralih untuk memilih salah satu dari sejumlah blok kode yang akan dieksekusi.

##### Syntax:
```php
switch (n) {
  case value1:
    //code to be executed if n=value1
    break;
  case value2:
     //code to be executed if n=value2
     break;
  ...
  default:
    // code to be executed if n is different from all labels
}
```
Pertama, ekspresi tunggal kami, n (paling sering variabel), dievaluasi satu kali. Selanjutnya, nilai ekspresi dibandingkan dengan nilai setiap kasus dalam struktur. Jika ada kecocokan, blok kode yang terkait dengan kasing dieksekusi.

```
Menggunakan pernyataan bersarang jika lagi menghasilkan perilaku yang serupa, tetapi switch menawarkan solusi yang lebih elegan dan optimal.
```


Pertimbangkan contoh berikut, yang menampilkan pesan yang sesuai untuk setiap hari.

```php
<?php
$today = 'Tue';

switch ($today) {
  case "Mon":
    echo "Today is Monday.";
    break;
  case "Tue":
    echo "Today is Tuesday.";
    break;
  case "Wed":
    echo "Today is Wednesday.";
    break;
  case "Thu":
    echo "Today is Thursday.";
    break;
  case "Fri":
     echo "Today is Friday.";
     break;
  case "Sat":
     echo "Today is Saturday.";
     break;
  case "Sun":
     echo "Today is Sunday.";
     break;
  default:
     echo "Invalid day.";
}
//Outputs "Today is Tuesday."
?>
```

### default

Pernyataan default digunakan jika tidak ada kecocokan yang ditemukan.
```php
$x=5;
switch ($x) {
  case 1:
    echo "One";
    break;
  case 2:
    echo "Two";
    break;
  default:
    echo "No match";
}

//Outputs "No match"
```

Kegagalan untuk menentukan pernyataan istirahat menyebabkan PHP untuk terus mengeksekusi pernyataan yang mengikuti kasus ini, sampai menemukan istirahat. Anda dapat menggunakan perilaku ini jika Anda harus sampai pada keluaran yang sama untuk lebih dari satu kasing.

```php
<?php
$day = 'Wed';

switch ($day) {
  case 'Mon':
    echo 'First day of the week';
    break;
  case 'Tue':
  case 'Wed':
  case 'Thu':
    echo 'Working day';
    break;
  case 'Fri':
    echo 'Friday!';
    break;
  default:
    echo 'Weekend!';
}

//Outputs "Working day"
?>
```
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

Break juga dapat digunakan untuk menghentikan eksekusi for, foreach, while, do-while.

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

