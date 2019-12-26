<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
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

    <section id="section2-obat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper-flex-center-down" style="height: 500px">
                        <h1>Data Obat</h1>
                        <br>
                        <table border="1" style="height: fit-content; width:75%; border: 2px solid black; font-family: montserrat;" >
                            <tr style="width: 300px; text-align:center; color: #45bde5;">
                                <th>No</th>
                                <th>Merk</th>
                                <th>Kegunaan</th>			
                                <th>Tersedia</th>
                            </tr>
                            <?php         
                                require 'koneksi.php';
                                $no = 1;        
                                $data = mysqli_query($koneksi, "SELECT * FROM obat");
                                while($d = mysqli_fetch_array($data)){
                            ?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><?php echo $d['nama']?></td>
                                    <td><?php echo $d['kegunaan']?></td>                
                                    <td><?php echo $d['tersedia']?></td>
                                </tr>

                            <?php
                                }
                            ?>						
                            <tr>							
                            </tr>
                        </table>        
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>