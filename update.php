<?php
$koneksi = mysqli_connect("localhost", "root", "123", "banin");

if (!$koneksi){
    echo "koneksi gagal";
}

if(isset($_POST["editdatadokter"])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $spesialis = $_POST['spesialis'];
    $free = $_POST['free'];

    // var_dump($free);
    if (strlen($nama) != 0 && strlen($alamat) != 0 && strlen($spesialis) != 0 && strlen($free) != 0) {    
    
        $sukses = mysqli_query($koneksi, "UPDATE doctor SET nama = '$nama', alamat = '$alamat', spesialis = '$spesialis', free = '$free' WHERE id = '$id'");
        
        // var_dump($sukses);

        if ($sukses) {
            // header("location: editdatadokter.php?edit=berhasil");
            echo "data berhasil diedit";
            header("Refresh: 3, url= admin.php"); 
        }
    }
    else{
        // header("location: editdatadokter.php?edit=gagal");
        echo "data gagal diedit";
    }
}

else if(isset($_POST["editdataperawat"])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];    
    $free = $_POST['free'];

    // var_dump($free);
    if (strlen($nama) != 0 && strlen($alamat) != 0 && strlen($free) != 0) {    
    
        $sukses = mysqli_query($koneksi, "UPDATE perawat SET nama = '$nama', alamat = '$alamat', free = '$free' WHERE id = '$id'");
        
        // var_dump($sukses);

        if ($sukses) {
            // header("location: editdatadokter.php?edit=berhasil");
            echo "data berhasil diedit";
            header("Refresh: 3, url= admin.php"); 
        }
    }
    else{
        // header("location: editdatadokter.php?edit=gagal");
        echo "data gagal diedit";
    }
}

else if(isset($_POST["editdataobat"])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kegunaan = $_POST['kegunaan'];    
    $tersedia = $_POST['tersedia'];

    // var_dump($free);
    if (strlen($nama) != 0 && strlen($kegunaan) != 0 && strlen($tersedia) != 0) {    
    
        $sukses = mysqli_query($koneksi, "UPDATE obat SET nama = '$nama', kegunaan = '$kegunaan', tersedia = '$tersedia' WHERE id = '$id'");
        
        // var_dump($sukses);

        if ($sukses) {
            // header("location: editdatadokter.php?edit=berhasil");
            echo "data berhasil diedit";
            header("Refresh: 3, url= admin.php"); 
            // header("location: admin.php");
        }
    }
    else{
        // header("location: editdatadokter.php?edit=gagal");
        echo "data gagal diedit";
    }
}


?>