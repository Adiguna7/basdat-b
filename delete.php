<?php 
    $koneksi = mysqli_connect("localhost", "root", "123", "banin");

    if (!$koneksi){
        echo "koneksi gagal";
    }



    $id = $_GET['id'];
    // var_dump($id);
    $user = $_GET['user'];
    // var_dump($user);

    if($user == "dokter"){
        $sukses = mysqli_query($koneksi, "DELETE FROM doctor WHERE id = '$id'");
            // var_dump($sukses);
    
            if($sukses){
                header("location: admin.php");
            }
            else{
                // header("location: editdatadokter.php?edit=gagal");
                echo "data gagal dihapus";
            } 
    }
    else if($user == "perawat"){
        $sukses = mysqli_query($koneksi, "DELETE FROM perawat WHERE id = '$id'");
            // var_dump($sukses);
    
            if($sukses){
                header("location: admin.php");
            }
            else{
                // header("location: editdatadokter.php?edit=gagal");
                echo "data gagal dihapus";
            } 
    }

    else if($user == "obat"){
        $sukses = mysqli_query($koneksi, "DELETE FROM obat WHERE id = '$id'");
            // var_dump($sukses);
    
            if($sukses){
                header("location: admin.php");
            }
            else{
                // header("location: editdatadokter.php?edit=gagal");
                echo "data gagal dihapus";
            } 
    }
    
    // require 'update.php';
    // var_dump ($_POST["hapusdatadokter"]);


    // if(isset($_POST['hapusdatadokter'])){
    // if(isset($_POST["hapusdatadokter"])){        
    //     $id = $_GET['id'];

    //     $sukses = mysqli_query($koneksi, "DELETE FROM doctor WHERE id = '$id'");
    //     var_dump($sukses);

    //     if($sukses){
    //         header("location: admin.php");
    //     }
    //     else{
    //         // header("location: editdatadokter.php?edit=gagal");
    //         echo "data gagal dihapus";
    //     }
    // }
    // else if(isset($_POST["hapusdataperawat"])){
    //     $id = $_GET['id'];

    //     $sukses = mysqli_query($koneksi, "DELETE FROM perawat WHERE id = '$id'");
    //     // var_dump($sukses);
    //     if($sukses){
    //         header("location: admin.php");
    //     }
    //     else{
    //         // header("location: editdatadokter.php?edit=gagal");
    //         echo "data gagal dihapus";
    //     }

    // }
    // else if(isset($_POST["hapusdataobat"])){
    //     $id = $_GET['id'];

    //     $sukses = mysqli_query($koneksi, "DELETE FROM obat WHERE id = '$id'");
    //     // var_dump($sukses);
    //     if($sukses){
    //         header("location: admin.php");
    //     }
    //     else{
    //         // header("location: editdatadokter.php?edit=gagal");
    //         echo "data gagal dihapus";
    //     }

    // }
?>

