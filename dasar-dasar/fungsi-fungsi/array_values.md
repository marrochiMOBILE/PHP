# array_values
Mengembalikan semua nilai-nilai array (not the keys) :

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a)); // Array ( [0] => Peter [1] => 41 [2] => USA )

echo '<br>';

$b=array("Name"=>"Peter","Age"=>"41","Country"=>"USA"); // Array ( [Name] => Peter [Age] => 41 [Country] => USA )
print_r($b);

$c = $a;
$d = $a;
echo var_dump($c);
echo var_dump(array_values($d));
?>
</body>
</html>
```