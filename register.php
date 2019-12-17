<?php
    require 'koneksi.php';

    if( isset($_POST["register"])){
        if( registrasi($_POST) > 0){
            echo "<script>
                alert('berhasil ragistrasi');
            </script>";
            header("Location = login.php");
        }
        else {
            echo mysqli_error($koneksi);
        }
    }
?>

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
    
    <section id="section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper-flex-center-down">
                    <h1>Registrasi</h1>
                    <br>
                    <form action="" method="POST">
                        <ul>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" autocomplete="off">                
                            </li>
                            <br>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" autocomplete="off">
                            </li>
                            <br>
                            <li style="display: flex; justify-content: space-between;">
                                <label for="password2">Konfirmasi Password</label>
                                <input type="password" name="password2" id="password2" autocomplete="off">                
                            </li>
                            <br>
                            <li>
                                <button type="submit" name="register">Submit</button>
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