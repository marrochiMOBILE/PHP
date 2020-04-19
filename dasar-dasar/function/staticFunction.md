# static function


```php
<?php
class User
{
    // diawali dengan keyword static
    // setelah visibility keyword
    public static $address = 'Sumbawa';

    public function showAddress() {
        echo self::$address;
    }
}

class Bio extends User
{
    public function showBio() {
        echo "Nama saya Bagus, alamat saya " . parent::$address;
    }
}

// cara akses static property
// langsung dari class User
echo User::$address . "<br/>";

// akses static property
// yang berada dalam method
// dengan terlebih dahulu
// membuat object
$Bagus = new User();
echo $Bagus->showAddress() . "<br/>";

// Undefined "Property"
// karena static property
// tidak boleh menggunakan ->
echo $Bagus->address . "<br/>";

// cara akses static property
// dari object
echo $Bagus::$address . "<br/>";

// mulai PHP 5.3.0
// mengakses static property
// bisa dengan terlebih dahulu membuat
// variable yang ber-value nama class
$ini_variable = 'User';
echo $ini_variable::$address . "<br/>";

// akses static property
// dari class turunan (extended class)
echo Bio::$address . "<br/>";

// akses dari method yang berisi
// static property yang
// berasal dari class induk
$BioObject = new Bio();
echo $BioObject->showBio();
?>
```
> coba bandingkan dengan dibawah ini 

```php
<?php 

function wekweka(){
    static $one = 0;
    echo $one;
    $one++;
}

wekweka(); // 0
wekweka(); // 1
wekweka(); // 2
wekweka(); // 3
wekweka(); // 4
echo '<br>';
function wekweke(){
     $one = 0;
    echo $one;
    $one++;
}
wekweke(); // 0
wekweke(); // 0
wekweke();  // 0
wekweke(); // 0 
wekweke(); // 0

?>
```