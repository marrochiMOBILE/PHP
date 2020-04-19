<?php
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>


Variabel sesi Anda tetap tersedia di $ _SESSION superglobal hingga Anda menutup sesi Anda.
Semua variabel sesi global dapat dihapus secara manual dengan menggunakan session_unset (). Anda juga dapat menghancurkan sesi dengan session_destroy ().
