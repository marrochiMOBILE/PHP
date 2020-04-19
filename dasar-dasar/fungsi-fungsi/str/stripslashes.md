# Stripslashes
menghilangkan karakter backslash
```php
$teks = '123\4567\89\567';
$strpos = Stripslashes($teks);  
echo $strpos; // 123456789567
```