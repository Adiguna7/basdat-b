<?php

$koneksi = mysqli_connect("localhost", "root", "123", "banin");

if (!$koneksi){
	echo "koneksi gagal";
}

if(isset($_POST['tambahdatadokter'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $spesialis = $_POST['spesialis'];
    $free = $_POST['free'];

    // var_dump($free);
    if (strlen($nama) != 0 && strlen($alamat) != 0 && strlen($spesialis) != 0 && strlen($free) != 0) {    
    
        $sukses = mysqli_query($koneksi, "INSERT INTO doctor VALUES (NULL, '$nama', '$alamat', '$spesialis', '$free') ");
        
        // var_dump($sukses);

        if ($sukses) {
            header("location: tambahdatadokter.php?input=berhasil");
        }
    }
    else{
        header("location: tambahdatadokter.php?input=gagal");
    }
}

if(isset($_POST['tambahdataperawat'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];    
    $free = $_POST['free'];

    // var_dump($free);
    if (strlen($nama) != 0 && strlen($alamat) != 0  && strlen($free) != 0) {    
    
        $sukses = mysqli_query($koneksi, "INSERT INTO perawat VALUES (NULL, '$nama', '$alamat', '$free') ");
        
        // var_dump($sukses);

        if ($sukses) {
            header("location: tambahdataperawat.php?input=berhasil");
        }
    }
    else{
        header("location: tambahdataperawat.php?input=gagal");
    }
}

if(isset($_POST['tambahdataobat'])){
    $merk = $_POST['merk'];
    $kegunaan = $_POST['kegunaan'];    
    $tersedia = $_POST['tersedia'];

    // var_dump($free);
    if (strlen($merk) != 0 && strlen($kegunaan) != 0  && strlen($tersedia) != 0) {    
    
        $sukses = mysqli_query($koneksi, "INSERT INTO obat VALUES (NULL, '$merk', '$kegunaan', '$tersedia') ");
        
        // var_dump($sukses);

        if ($sukses) {
            header("location: tambahdataobat.php?input=berhasil");
        }
    }
    else{
        header("location: tambahdataobat.php?input=gagal");
    }
}

?>