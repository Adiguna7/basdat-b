<?php
    require 'koneksi.php';

    if (isset($_POST["login"])){        
        session_start();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = mysqli_query($koneksi, "SELECT * 
                                            FROM user
                                            WHERE username = '$username'");    
        // echo(strcmp($row["username"], "admin"));
        //cek username
        if(mysqli_num_rows($result) > 0){
            
            $row = mysqli_fetch_assoc($result);
            //cek password
            if(password_verify($password, $row["password"])){
                if($row["level"] == "admin"){
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "admin";
                    header("location: admin.php");                                                    
                }
                else if($row["level"] == "pegawai"){
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "pegawai";
                    header("location: homepegawai.php");                                
                }
                else if($row["level"] == "pasien"){
                    $_SESSION['username'] = $username;
                    $_SESSION['level'] = "pasien";
                    header("location: home.php");                                
                }
                else{
                    header("location:loginpage.php?pesan=gagal");
                }
            }
            // else{
            //     $error = true;        
            // }
            else{
                header("location:loginpage.php?pesan=gagal");
            }            
        }
        
    }
        
    
?>