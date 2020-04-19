# Strip_tags
menghilangkan kode tag HTML 

```php
$teks = '<h1>h1</h1>
<h2>h2</h2>
<h3>h3</h3>
<h2>h2</h2>';
$strpos = Strip_tags($teks,'<h2>');  
echo $strpos; // menghilangkan tag  h1 dan h3
```

```php
$teks = '<?php $ambeyen="ambeyen"; ?><h1>h1</h1>
<h2>h2</h2>
<h3>h3</h3>
<h2>h2</h2>';
$strpos = Strip_tags($teks);  
echo $strpos; // menghilangkan tag  semua
```