<?php
    include "koneksi.php";
    
    // Menyimpan data ke dalam database phpmyadmin
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    // Query insert data
    $sql = "INSERT INTO data_crud(nama, kelas, alamat) VALUES('$nama','$kelas','$alamat')";
    $add = $conn->query($sql);

    if($add) {
        $conn->close();
        header("location:index.php");
        exit();
    } else {
        echo "Error : ".$conn->error;
        $conn->close();
        exit();
    }
?>