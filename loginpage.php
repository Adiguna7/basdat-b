<?php 
    require 'login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"></script>
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | BanMed</title>
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

    <section id="2">
        <div  class="container">
            <div id="selector_1-login" class="row">
                <div id="selector1-login" class="col-lg-12">
                    <div class="wrapper-flex-center-down">
                        <h1>Login</h1>
                        <br>
                        <?php if (isset($_GET["pesan"])) {
                                if($_GET["pesan"] == "gagal"){
                        ?>
                        <p style="color: red;">password/username salah</p>

                        <?php
                            }
                            
                        }
                        ?>

                        <form action="login.php" method="POST">
                            <ul>
                                <li style="display: flex; justify-content: space-between;">                                    
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" autocomplete="off">                
                                </li>
                                <br>
                                <li style="display: flex; justify-content: space-between;">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                </li>
                                <br>
                                <li>
                                    <div class="tulisan1-judul" style="font-size: 1.1rem; text-align: center; width: 100%;">
                                        Belum punya akun? <span style="color: red; cursor: pointer;" onclick="location.href='register.php'">Daftar</span>
                                    </div>                                    
                                </li>
                                <br>
                                <li style="text-align: center;">
                                    <button type="submit" name="login">Login</button>
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