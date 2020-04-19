# filter_var

Fungsi filter_var () memfilter variabel dengan filter yang ditentukan.


Periksa apakah $ email adalah alamat email yang valid:

```php
<?php
// Variable to check
$email = "john.doe@example.com";

// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?>
```

periksa url
```php
<?php
$var="https://www.ochi��ls.co�m<?php echo 'cinta' ?>";

var_dump(filter_var($var, FILTER_SANITIZE_URL)); // https://www.ochils.com
?>
```