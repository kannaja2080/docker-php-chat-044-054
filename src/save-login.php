<?php
session_start();
    require "server.php";
    if (isset($_GET['submit'])) {
        $username = $_GET['username'];
        $password = md5( $_GET['password']);
        if (empty($username) || empty($password))  {
            header('location: form-register.php');
        }else{
            $sql = "SELECT * FROM `tb_user` WHERE username = '$username' && password = '$password';";
            $result = mysqli_query($conn,$sql);
            $result_set = mysqli_fetch_assoc($result);
            if($result_set){
                $_SESSION['id'] = $result_set['id'];
                $_SESSION['username'] = $result_set['username'];
                $_SESSION['password'] = $result_set['password'];
                $_SESSION['firstname'] = $result_set['firstname'];
                $_SESSION['lastname'] = $result_set['lastname'];
                header('location: index.php');
                
            }else{
                 header('location: form-register.php');
            }
        }

    }

?>