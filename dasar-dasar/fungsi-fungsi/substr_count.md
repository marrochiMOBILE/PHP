# substr_count
menghitung jumlah substring dalam
string
```php
$teks = '0123456789567';
$substr = substr($teks, 5, 3);  // 567
echo substr_count($teks, $substr); // 2
```