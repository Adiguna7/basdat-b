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
    <title>Dashboard | Admin</title>
</head>
<body>
    <?php
        require 'koneksi.php';
        session_start();

        if($_SESSION["level"] == ""){
            header("location : loginpage.php?pesan=gagal");
        }
    ?>

    <section id="section1">
        <div class="container">
            <div id="selector_1" class="row">
                <div id="selector1" class="col-lg-12">
                    <div class="wrapper-flex-spacebetween">
                        <div class="wrapper-flex-center">
                            <div class="tulisan1-judul">
                                BanMed
                            </div>
                        </div>
                        <div class="wrapper-flex-center">
                            <div class="tulisan1-judul" style="color: red; cursor: pointer;" onclick="location.href = 'logout.php'">
                                LogOut
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section2-dokter"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper-flex-center-down" style="height: fit-content">
                        <h1>Data Dokter</h1>                                            
                        <br>
                        <table border="1" style="height: fit-content; width:75%; border: 2px solid black; font-family: montserrat;">
                            <tr style="width: 300px; text-align:center; color: #45bde5;">
                                <th>no</th>
                                <th>nama</th>
                                <th>alamat</th>
                                <th>spesialis</th>
                                <th>free</th>
                                <th>Action</th>
                            </tr>
                            <?php                                         
                                $no = 1;        
                                $data = mysqli_query($koneksi, "SELECT * FROM doctor");
                                while($d = mysqli_fetch_array($data)){
                            ?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><?php echo $d['nama']?></td>
                                    <td><?php echo $d['alamat']?></td>
                                    <td><?php echo $d['spesialis']?></td>
                                    <td><?php echo $d['free']?></td>
                                    <td style="display: flex; justify-content: center;">
                                        <button type="submit" name="editdatadokter">
                                            <a style="text-decoration: none; color:white;" href="editdatadokter.php?id=<?php echo $d["id"]?>">Edit</a>
                                        </button>
                                        <button type="submit" name="hapusdatadokter">
                                            <a style="text-decoration: none; color:white;" href="delete.php?id=<?php echo $d["id"]?>&user=dokter">Delete</a>
                                        </button>
                                    </td>
                                </tr>

                            <?php
                                }
                            ?>						                            
                        </table>
                        <br>
                        <button type="submit" name="tambah" onclick="location.href = 'tambahdatadokter.php'">Tambah Data</button>
                    </div>            
                </div>
            </div>
        </div>
    </section>

    <section id="section2-perawat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper-flex-center-down" style="height: fit-content">
                    <h1>Data Perawat</h1>
                    <br>
                    <table border="1"  style="height: fit-content; width:75%; border: 2px solid black; font-family: montserrat;">
                        <tr style="width: 300px; text-align:center; color: #45bde5;">
                            <th>no</th>
                            <th>nama</th>
                            <th>alamat</th>			
                            <th>free</th>
                            <th>Action</th>
                        </tr>
                        <?php         
                            // require 'koneksi.php';
                            $no = 1;        
                            $data = mysqli_query($koneksi, "SELECT * FROM perawat");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $d['nama']?></td>
                                <td><?php echo $d['alamat']?></td>                
                                <td><?php echo $d['free']?></td>
                                <td style="display: flex; justify-content: center;">
                                    <button type="submit" name="editdataperawat">
                                        <a style="text-decoration: none; color:white;" href="editdataperawat.php?id=<?php echo $d["id"]?>">Edit</a>
                                    </button>
                                    <button type="submit" name="deletedataperawat">
                                        <a style="text-decoration: none; color:white;" href="delete.php?id=<?php echo $d["id"]?>&user=perawat">Delete</a>
                                    </button>
                                </td>
                            </tr>

                        <?php
                            }
                        ?>						
                        <tr>							
                        </tr>
                    </table>
                    <br>
                    <button type="submit" name="tambahdataperawat" onclick="location.href = 'tambahdataperawat.php'">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="section2-obat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper-flex-center-down" style="height: fit-content">
                        <h1>Data Obat</h1>
                        <br>
                        <table border="1" style="height: fit-content; width:75%; border: 2px solid black; font-family: montserrat;" >
                            <tr style="width: 300px; text-align:center; color: #45bde5;">
                                <th>no</th>
                                <th>merk</th>
                                <th>kegunaan</th>			
                                <th>tersedia</th>
                                <th>Action</th>
                            </tr>
                            <?php                                
                                $no = 1;        
                                $data = mysqli_query($koneksi, "SELECT * FROM obat");
                                while($d = mysqli_fetch_array($data)){
                            ?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><?php echo $d['nama']?></td>
                                    <td><?php echo $d['kegunaan']?></td>                
                                    <td><?php echo $d['tersedia']?></td>
                                    <td style="display: flex; justify-content: center;">
                                    <button type="submit" name="editdataobat">
                                        <a style="text-decoration: none; color:white;" href="editdataobat.php?id=<?php echo $d["id"]?>">Edit</a>
                                    </button>
                                    <button type="submit" name="deletedataobat">
                                        <a style="text-decoration: none; color:white;" href="delete.php?id=<?php echo $d["id"]?>&user=obat">Delete</a>
                                    </button>
                                    </td>
                                </tr>

                            <?php
                                }
                            ?>						
                            <tr>							
                            </tr>
                        </table>
                        <br>
                        <button type="submit" name="tambah" onclick="location.href = 'tambahdataobat.php'">Tambah Data</button>        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section></section>

</body>
</html>