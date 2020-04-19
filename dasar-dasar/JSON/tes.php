<?php 
$data = file_get_contents('coba2.json');
$mahasiswa = json_decode($data, true);

// echo var_dump($mahasiswa);
// echo $mahasiswa[0]['pembimbing']['pembmbing1']; // eko mulyono;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
    <th>nama</th>
    <th>umur</th>
    <th>hobby</th>
    <th>pembimbing 1</th>
    <th>pembimbing 2</th>
    </tr>
    <tr>
    <?php foreach($mahasiswa as $mhs): $no = 0; ?>
    <td><?= $mhs['nama'] ?></td>
    <td><?= $mhs['umur'] ?></td>
    <td><?= $mhs['hoby'] ?></td>

    <?php $no++;  endforeach ?>
    </tr>
    </table>
</body>
</html>

    <!-- <td><?php
    //  $mhs['pembimbing']['pembmbing1'] 
     ?></td>
    <td><?php 
    // $mhs['pembimbing']['pembmbing2']
     ?></td> -->