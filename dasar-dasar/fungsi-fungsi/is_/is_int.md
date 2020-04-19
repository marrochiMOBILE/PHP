# is_int

Digunakan untuk menentukan apakah nilai yang dimasukkan merupakan bilangan bulat. Lihat contoh dibawah.
```php

<?php
function cekNilai ($nilai=null) 
{ 
   if (is_int($nilai)){ $des = "Nilai Integer<br />"; } 
   if (is_float($nilai)){ $des = "Nilai Float<br />"; } 
   if (is_bool($nilai)) { $des = "Nilai Boolean<br />"; } 
   if (is_null($nilai)) { $des = "Nilai NULL<br />"; } 
   if (is_numeric($nilai)) { $des = "Ini Angka<br />"; } 
   if (is_string($nilai)) { $des = "Ini string<br />"; } 
   return $des; 
} 

$bool = false; 
echo cekNilai(45); 
echo cekNilai($bool); 
echo cekNilai(); 
echo cekNilai("halo");
/*
Ini Angka
Nilai Boolean
Nilai NULL
Ini string
 */

?> 

```