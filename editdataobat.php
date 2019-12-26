<?php 
    $koneksi = mysqli_connect("localhost", "root", "123", "banin");

    if (!$koneksi){
        echo "koneksi gagal";
    }

    // require 'update.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Edit Data Dokter</title>
</head>
<body>
    <section id="section1">
        <div class="container">
            <div id="selector_1" class="row">
                <div id="selector1" class="col-lg-12">
                    <div class="wrapper-flex-spacebetween">
                        <div class="wrapper-flex-center">
                            <div class="tulisan1-judul">
                                BenMed
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper-flex-center-down">
                    <h1>Edit Data Obat</h1>
                    <br>
                    <br>
                    <?php
                    if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                    }                    
                    $data = mysqli_query($koneksi, "SELECT * FROM obat WHERE id = '$id' ");
                    while($d = mysqli_fetch_assoc($data)){                    
                    ?>                    
                    <form action="update.php" method="POST">
                        <ul>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="nama">Merk</label>
                                <input type="hidden" name="id" id="id" autocomplete="off" value="<?php echo $d["id"]?>">
                                <input type="text" name="nama" id="nama" autocomplete="off" value="<?php echo $d["nama"]?>">                
                            </li>
                            <br>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="kegunaan">Kegunaan</label>
                                <input type="text" name="kegunaan" id="kegunaan" autocomplete="off" value="<?php echo $d["kegunaan"]?>">
                            </li>                            
                            <br>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="tersedia">Tersedia</label>
                                <input type="text" name="tersedia" id="tersedia" autocomplete="off" value="<?php echo $d["tersedia"]?>">                
                            </li>                            
                            <br>                           
                            <br>                            
                            <li>
                                <button type="submit" name="editdataobat">Edit</button>
                            </li>
                        </ul>        

                    </form>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>