# Htmlentities
menghentikan proses penerjemahan tag html oleh browser 
```php

$teks = '<input type="text" name="sss" value="sss" placeholder="bebas">';
$strpos = Htmlentities($teks);  // jadi string | <input type="text" name="sss" value="sss" placeholder="bebas">
$strpos3 =  strip_tags($teks);  
$strpos2 = $teks;  
echo $strpos.'<hr>'.$strpos2.'<hr>'.$strpos3; // menghilangkan tag  semua
```