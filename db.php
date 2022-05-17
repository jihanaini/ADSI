<?php
    Global $conn;
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'adsi';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal connect');
?>