# array lanjutan 2

disini kita akan lebih mendalam menjelaskan tentang array coba perhatikan contoh dibawah ini :

```php
$nama[] = 'rio';   $umur[0] = 22;      $bebas['aku'] = "string";
$nama[] = 'sarinah';  $umur[1] = 19;   $bebas['kamu'] = 2;
$nama[] = 'anton'; $umur[2] = 24;
$nama[] = 'mega';  $umur[3] = 56;

$jumlah = count($nama); // count -> untuk menghitung
for($i = 0; $i < $jumlah; $i++ ){
    echo '['.$i.'] = '.$nama[$i].'<br>';
    echo '['.$i.'] = '.$umur[$i].'<br><hr>';
}
// [0] = rio
// [0] = 22
// [1] = sarinah
// [1] = 19
// [2] = anton
// [2] = 24
// [3] = mega
// [3] = 56

print_r($nama);
print_r($umur);
```
 indexed array merupakan array dengan key berupa angka, misal:

 ```php
 $bulan = array('Januari', 'Februari', 'Maret');
print_r($bulan); // Array ( [0] => Januari [1] => Februari [2] => Maret )

 ```
 Pada contoh diatas, value  dari array adalah Januari, Februari, dan Maret, sedangkan key nya adalah 0, 1, dan 2. Karena key tidak didefinisikan, maka nilai key otomatis mulai dari 0

bentuk diatas sama dengan:
```php
$matahari = array(0=>'Januari',1=>'Februari',3=>'Maret');
print_r($matahari);
```
sedangakan associative array merupakan array dengan key berupa nilai tertentu, misal:
```php
$gerhana = array('jenis' => 'Mobil', 'merk' => 'Toyota', 'tipe' => 'Vios');
print_r($gerhana); // Array ( [jenis] => Mobil [merk] => Toyota [tipe] => Vios )
```
Pada contoh diatas, value dari array adalah Mobil, Toyota, dan Vios. Sedangkan key-nya adalah jenis, merk, dan tipe.

> untuk perulangan anda jugha bisa menggunakan foreeach
```php
$gerhana = array('jenis' => 'Mobil', 'merk' => 'Toyota', 'tipe' => 'Vios');
print_r($gerhana); // Array ( [jenis] => Mobil [merk] => Toyota [tipe] => Vios )

foreach ($gerhana as $value){
    echo $value; // Mobil Toyota Vios
}
foreach ($gerhana as $key => $value):
    echo '<br>'.$key.' '.$value; 
    /*
    jenis Mobil
    merk Toyota
    tipe Vios
 */
endforeach;


```

coba bandingkan dengan yang dibawah ini arraynya : 

```php
$arrayASSOC = [[
    'nama' => 'Marrochi',
    'umur' => 23
],
[
    'nama' => 'kamila',
    'umur' => 26
],];

echo $arrayASSOC[1]['nama']; // kamila

foreach ($arrayASSOC as $value) {
    echo '<br>';
    echo 'nama saya adalah : '.$value['nama'];
    echo '<br>';
    echo 'umur  saya adalah : '.$value['umur'];
    echo '<hr>';
}

/*

nama saya adalah : Marrochi
umur saya adalah : 23

nama saya adalah : kamila
umur saya adalah : 26
*/
```

```php
$arrayDidalamArray = array( 
    'nama' => array ('daviv','andri','jio'),
    'umur' => array (22,20,21)
);

echo $arrayDidalamArray['nama'][1]; // andri

// foreach ($arrayDidalamArray as $value) :
//     echo $value['nama']; //tidak bisa membaca undifine
//     echo $value['umur']; //tidak bisa membaca undifine
// endforeach;

```
disini jugha bisa kuta gunakan bersama html

```php
$bulan = array (1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

$opsi_bulan = '<select name="bulan">';
foreach ($bulan as $key => $value) {
	$opsi_bulan .= '<option value="' . $key . '">' . $value . '</option>' . "\r\n";
}
$opsi_bulan .= '</select>';

echo $opsi_bulan;

/*
<select name="bulan"><option value="1">Januari</option>
<option value="2">Februari</option>
<option value="3">Maret</option>
<option value="4">April</option>
<option value="5">Mei</option>
<option value="6">Juni</option>
<option value="7">Juli</option>
<option value="8">Agustus</option>
<option value="9">September</option>
<option value="10">Oktober</option>
<option value="11">November</option>
<option value="12">Desember</option>
</select> 

*/ 
```