# foreach
Foreach loop hanya bekerja pada array, dan digunakan untuk loop melalui setiap pasangan kunci / nilai dalam array.

##### Ada dua sintaks:

```php
foreach (array as $value) {
  code to be executed;
}
//or
foreach (array as $key => $value) {
   code to be executed;
}
```

Bentuk pertama loop atas array. Pada setiap iterasi, nilai elemen saat ini ditetapkan ke $ value, dan pointer array digerakkan oleh satu, hingga mencapai elemen array terakhir.
Bentuk kedua tambahan akan menetapkan kunci elemen saat ini ke variabel $ key pada setiap iterasi.

Contoh berikut menunjukkan loop yang menampilkan nilai-nilai array $ names.

```php
<?php
    $names = array("John", "David", "Amy");
    foreach ($names as $name) {
        echo $name.'<br />';
    }
// John
// David
// Amy
?>
```

anda jugha bisa menggunakannya seperti ini :

```php
<?php
 
  $daftarNama = array("eko", "aryo seto", "janda muda", "bunda anak satu", "tante anak dua");

  foreach ($daftarNama as $aku) :
    echo $aku;
    echo "<br>";
  endforeach;
/*
eko
aryo seto
janda muda
bunda anak satu
tante anak dua
*/
?>
```


coba bandingkan dengan dibawah ini :
```php
<?php
 
  $daftarNama = array("eko" => "eko dermawan", "aryo" => "aryo seto", "indra" => "indera asura", "etwan" => "ectwan dilandino");

  foreach ($daftarNama as $aku) :
    echo $aku;
    echo "<br>";
  endforeach;
/*
eko dermawan
aryo seto
indera asura
ectwan dilandino
*/
?>
```

> bandingkan dengan dibawah ini

```php
<?php
 
  $daftarNama['nama'] = array("eko" => "eko dermawan", "aryo" => "aryo seto", "indra" => "indera asura", "etwan" => "ectwan dilandino");

  foreach ($daftarNama['nama'] as $aku) :
    echo $aku;
    echo "<br>";
  endforeach;
/*
eko dermawan
aryo seto
indera asura
ectwan dilandino
*/
?>
```