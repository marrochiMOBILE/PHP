# arrays

Array adalah variabel khusus, yang dapat menampung lebih dari satu nilai pada suatu waktu.
Jika Anda memiliki daftar item (daftar nama, misalnya), menyimpannya dalam variabel tunggal akan terlihat seperti ini :

```php
$name1 = "David"; 
$name2 = "Amy"; 
$name3 = "John"; 
```

Tetapi bagaimana jika Anda memiliki 100 nama dalam daftar Anda? Solusinya: Buat array!

### Numeric Arrays

Array angka atau indeks mengasosiasikan indeks numerik dengan nilainya.
Indeks dapat ditetapkan secara otomatis (indeks selalu dimulai pada 0), seperti ini:

> $names = array("David", "Amy", "John");


Sebagai alternatif, Anda dapat menetapkan indeks secara manual.

```php
$names[0] = "David";
$names[1] = "Amy";
$names[2] = "John";
```

Kami mendefinisikan sebuah array bernama $ names yang menyimpan tiga nilai.
Anda dapat mengakses elemen array melalui indeks mereka.

> echo $names[1]; // Outputs "Amy"


Anda dapat memiliki bilangan bulat, string, dan tipe data lainnya dalam satu array.

```php
<?php
$myArray[0] = "John";
$myArray[1] = "<strong>PHP</strong>";
$myArray[2] = 21;

echo "$myArray[0] is $myArray[2] and knows $myArray[1]";

// Outputs "John is 21 and knows PHP"
?>
```

## Associative Arrays

Array asosiatif adalah array yang menggunakan kunci bernama yang Anda tetapkan untuk mereka.
Ada dua cara untuk membuat array asosiatif:

```php
<?php
$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// or
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";

echo $people['David']; // 27
?>
```
Pada contoh pertama, perhatikan penggunaan tanda => dalam menetapkan nilai ke kunci yang diberi nama.

```php
$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");

echo $people['Amy']; // Outputs 21"
```

## Multi-Dimensional Arrays

Array multidimensi berisi satu atau lebih array.

Dimensi array menunjukkan jumlah indeks yang Anda perlukan untuk memilih elemen.
- Untuk larik dua dimensi, Anda perlu dua indeks untuk memilih elemen
- Untuk larik tiga dimensi, Anda perlu tiga indeks untuk memilih elemen

> Array lebih dari tiga level sulit untuk dikelola.


Mari kita buat array dua dimensi yang berisi 3 array
```php
$people = array(
   'online'=>array('David', 'Amy'),
   'offline'=>array('John', 'Rob', 'Jack'),
   'away'=>array('Arthur', 'Daniel')
);
```

Sekarang array $ people dua dimensi berisi 3 array, dan memiliki dua indeks: baris dan kolom.
Untuk mengakses elemen array $ people, kita harus menunjuk ke dua indeks.

```php
<?php
    $people = array(
        'online'=>array('David', 'Amy'),
        'offline'=>array('John', 'Rob', 'Jack'),
        'away'=>array('Arthur', 'Daniel')
);

    echo $people['online'][0]; // david
    echo "<br />";
    echo $people['away'][1]; // daniel

?>
```

coba terus
```php
<?php
    $id = 'id';
    $name ='ochi';
    $pass ='ahfuck';

    $people = array(
        'online'=> $id,
        'offline'=> $name,
        'away'=> $pass
);

    echo $people['online']; // id
    echo "<br />";
    echo $people['away']; // ahfuck

?>
```
