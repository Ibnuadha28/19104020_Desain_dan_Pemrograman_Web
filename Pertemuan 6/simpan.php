<?php
    include "koneksi.php";
    include "create_message.php";

    // Menyimpan data ke dalam database phpmyadmin
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $targetDir = "gambar/";
    $nama_file = time().$_FILES["file"]["name"];
    $file_temp = $_FILES["file"]["tmp_name"];

    if(isset($_POST['mahasiswa_id'])) {
        move_uploaded_file($file_temp, $targetDir."/".$nama_file);
        $sql = "UPDATE data_crud SET nama='$nama', kelas='$kelas', alamat='$alamat', foto+'$nama_file' 
            WHERE id=".$_POST['mahasiswa_id'];
        $edit = $conn->query($sql);

        if($edit) {
            $conn->close();
            create_message('Ubah data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']); 
            exit();
        } else {
            $conn->close();
            create_message("Error: ".$sql."<br>".$conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']); 
            exit();
        }
    
    } else {
        move_uploaded_file($file_temp, $targetDir."/".$nama_file);
    // Query insert data
        $sql = "INSERT INTO data_crud(nama, kelas, alamat, foto) VALUES('$nama','$kelas','$alamat', $nama_file)";
        $add = $conn->query($sql);

        if($add) {
            $conn->close();
            create_message('Simpan data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']); 
            exit();
        } else {
            $conn->close();
            create_message("Error: ".$sql."<br>".$conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']); 
            exit();
        }
    }
?>