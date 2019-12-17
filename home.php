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

    <section id="section2" style="margin-top: 100px">
        <div class="container">
            <div id="selector_1-home" class="row">
                <div id="selector1-home" class="col-lg-4">
                    <img src= <?php echo "image/Doctor-03.jpg"?> alt="" srcset="" style="width: 350px">
                </div>
                <div id="selector2-home" class="col-lg-8">
                    <div class="wrapper-flex-center-down">
                        <div class="tulisan1-judul">
                            Hi! <br>
                            Anda Login Sebagai
                        </div>
                        <div class="tulisan1-judul">
                            Pasien                            
                        </div>
                        <div class="tulisan1-judul" onclick="location.href = 'tampildatadokter.php'">
                            Cek Daftar Dokter
                        </div>
                        <div class="tulisan1-judul" onclick="location.href = 'tampildataperawat.php'">
                            Cek Daftar Perawat
                        </div>
                        <div class="tulisan1-judul" onclick="location.href = 'tampildataobat.php'">
                            Cek Daftar Obat
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>