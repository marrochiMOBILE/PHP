# method_exist
method_exists - Memeriksa apakah metode kelas ada

```php
<?php
class ParentClass {

   function doParent() { }
}

class ChildClass extends ParentClass { }

$p = new ParentClass();
$c = new ChildClass();

// all return true
var_dump(method_exists($p, 'doParent')); // true
var_dump(method_exists($c, 'doParent')); // true

var_dump(is_callable(array($p, 'doParent'))); // true
var_dump(is_callable(array($c, 'doParent'))); // true
?>
```