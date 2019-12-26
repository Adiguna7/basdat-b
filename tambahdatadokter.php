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
    <title>Tambah Data</title>
</head>
<body>
    <?php
        require 'tambahdata.php';
    ?>
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
                    <h1>Tambah Data Dokter</h1>
                    <br>
                    <br>                    
                    <form action="tambahdata.php" method="POST">
                        <ul>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" autocomplete="off">                
                            </li>
                            <br>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" autocomplete="off">
                            </li>
                            <br>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="spesialis">Spesialis</label>
                                <input type="text" name="spesialis" id="spesialis" autocomplete="off">                
                            </li>
                            <br>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="free">Free</label>
                                <input type="text" name="free" id="free" autocomplete="off">                
                            </li>
                            <br>
                            <?php
                                if(isset($_GET["input"])){
                                    if($_GET["input"] == "berhasil"){ ?>
                                    <p style="color: #45bde5;">Data Berhasil Ditambahkan</p>
                                    <?php
                                        header("Refresh: 3, url= admin.php");                                        
                                    }
                                    else if ($_GET["input"] == "gagal") { ?>
                                    <p style="color: red;">Mohon Isi Semua Field</p>
                                    <?php
                                    }
                                }
                            ?>
                            <br>
                            <br>                            
                            <li>
                                <button type="submit" name="tambahdatadokter">Tambah</button>
                            </li>
                        </ul>        

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>