<?php
    $nama_lengkap = $_GET ['nama'];
    $email = $_GET ['email'];
    $alamat = $_GET ['alamat'];
    $telepon = $_GET ['telepon'];

    echo "<h1>Data Pendaftar</h1><br>";
    echo "nama lengkap : ". $nama_lengkap . "<br>";
    echo "email : ". $email . "<br>";
    echo "alamat : ". $alamat . "<br>";
    echo "nomor telepon : ". $telepon . "<br>";

?>