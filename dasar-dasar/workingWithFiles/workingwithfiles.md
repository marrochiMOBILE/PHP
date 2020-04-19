# Manipulating Files
PHP menawarkan sejumlah fungsi untuk digunakan saat membuat, membaca, mengunggah, dan mengedit file.
Fungsi fopen () membuat atau membuka file. Jika Anda menggunakan fopen () dengan file yang tidak ada, file tersebut akan dibuat, mengingat file tersebut telah dibuka untuk ditulis (w) atau ditambahkan (a).


##### Gunakan salah satu mode berikut untuk membuka file.
1. r: Membuka file hanya untuk dibaca.
1. w: Membuka file hanya untuk menulis. Hapus konten file atau buat file baru jika tidak ada.
1. a: Buka file hanya untuk menulis.
1. x: Membuat file baru hanya untuk menulis.
1. r +: Membuka file untuk membaca / menulis.
1. w +: Membuka file untuk membaca / menulis. Hapus konten file atau buat file baru jika tidak ada.
1. a +: Membuka file untuk membaca / menulis. Membuat file baru jika file tersebut tidak ada
1. x +: Membuat file baru untuk baca / tulis.

Contoh di bawah ini membuat file baru, "file.txt", yang akan dibuat di direktori yang sama dengan kode PHP.

```php
$myfile = fopen("file.txt", "w");
```

```
PHP menawarkan sejumlah fungsi untuk digunakan saat membuat, membaca, mengunggah, dan mengedit file.
```

Saat menulis ke file, gunakan fungsi fwrite ().
Parameter pertama dari fwrite () adalah file untuk menulis; parameter kedua adalah string yang akan ditulis.

Contoh di bawah ini menulis beberapa nama ke dalam file baru bernama "names.txt".

```php
<?php
$myfile = fopen("names.txt", "w");

$txt = "John\n";
fwrite($myfile, $txt);
$txt = "David\n";
fwrite($myfile, $txt);

fclose($myfile);

/* File contains:
John
David
*/
?>
```

Perhatikan bahwa kami menulis ke file "names.txt" dua kali, dan kemudian kami menggunakan fungsi fclose () untuk menutup file.

> Simbol \ n digunakan saat menulis baris baru.

### fclose()

Fungsi fclose () menutup file yang terbuka dan mengembalikan TRUE jika berhasil atau SALAH pada kegagalan.

## next 2

Jika Anda ingin menambahkan konten ke file, Anda perlu membuka file di append mod

##### For example:

```php
<?php
$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);
?>
```

```
Saat menambahkan file menggunakan mode 'a', penunjuk file ditempatkan di akhir file, memastikan bahwa semua data baru ditambahkan di akhir file.
```


Mari kita membuat contoh formulir yang menambahkan data yang terisi ke file.

```php
<?php
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}
?>
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>
```

Sekarang, setiap kali nama dimasukkan dan dikirimkan, itu ditambahkan ke file "names.txt", bersama dengan baris baru.

Fungsi isset () menentukan apakah formulir telah dikirimkan, serta apakah teks berisi nilai.

> Kami tidak menentukan atribut tindakan untuk formulir, jadi itu akan dikirimkan ke dirinya sendiri. 1

## Reading a File

Fungsi file () membaca seluruh file menjadi sebuah array. Setiap elemen dalam array sesuai dengan baris dalam file:

```php
<?php
    $myfile = fopen("names.txt", "w");

    $txt = "John\n";
    fwrite($myfile, $txt);
    $txt = "David\n";
    fwrite($myfile, $txt);

    fclose($myfile);

    $read = file('names.txt');
    foreach ($read as $line) {
        echo $line .", ";
    }
?>
```
Ini mencetak semua baris dalam file, dan memisahkannya dengan koma.


> Kami menggunakan foreach loop, karena variabel $ read adalah array.

Pada akhir output pada contoh sebelumnya, kita akan memiliki koma, seperti yang kita cetak setelah setiap elemen array.
Kode berikut memungkinkan kita menghindari mencetak koma akhir itu.

```php
<?php
    $myfile = fopen("names.txt", "w");

    $txt = "John\n";
    fwrite($myfile, $txt);
    $txt = "David\n";
    fwrite($myfile, $txt);

    fclose($myfile);

    $read = file('names.txt');
    $count = count($read);
    $i = 1;
    foreach ($read as $line) {
        echo $line;
        if($i < $count) {
            echo ', ';
        }
        $i++;
    }
?>
```
Variabel $ count menggunakan fungsi count untuk mendapatkan jumlah elemen dalam array $ read.
Kemudian, di loop foreach, setelah setiap baris dicetak, kami menentukan apakah garis saat ini kurang dari jumlah total garis, dan mencetak koma jika itu.

> Ini menghindari mencetak koma terakhir, seperti untuk baris terakhir, $ i sama dengan $ count.