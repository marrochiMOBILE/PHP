# define 

```php
<?php 

define('s', 4);
Define('p', 7);
define('l', 3);
define('t', 9);
define('pi', 3.14);
Define('r2', 3*3);
Define('r3', 3*3*3);

$balok = p * l * t;
$tabung = pi * r2 * t;
$kerucut = (1/3) * pi * r2 * t;
$bola = (4/3) * pi * r3;

?>
<script>
        function panggilDiaYangTelahPergi(jamanNow){
        document.getElementById("volumeBalok").innerHTML = jamanNow['satu'];
        document.getElementById("volumeTabung").innerHTML = jamanNow['dua'];
        document.getElementById("volumeKerucut").innerHTML = jamanNow['tiga'];
        document.getElementById("volumeBola").innerHTML = jamanNow['empat'];
    }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
<?php $volume = array('vbal' => $balok, 'vt' => $tabung, 'vk' => $kerucut, 'vbol' => $bola);  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autor :: ochi</title>
<?php $volume = array_values($volume);  ?>    
</head>
<body>
<script>
    let jksio = <?= $volume[0]; ?>;
    let jkyui = <?= $volume[1]; ?>;
    let jknjm = <?= $volume[2]; ?>;
    let jkiuy = <?= $volume[3]; ?>;
</script>
    <table border="2" cellpadding="2" cellspacing="2" >
    <tr>
    <td id="volumeBalok"></td>
    <td id="volumeTabung"></td>
    </tr>
    <script>
    let arr  = () => [jksio,jkyui,jknjm,jkiuy];
    </script>
    <tr>
    <td id="volumeKerucut"></td>
    <script>
    let [satu, dua, tiga, empat] = arr();
    </script>
    <td id="volumeBola"></td>
    <script>
        jamanNow= {
        satu: satu,
        dua: dua,
        tiga: tiga,
        empat: empat
    };
    </script>
    </tr>
    </table>
    <script>
    panggilDiaYangTelahPergi(jamanNow);
    </script>
</body>
</html>
```