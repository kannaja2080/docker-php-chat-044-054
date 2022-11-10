<?php
session_start();
    require "server.php";
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5( $_POST['password']);
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        if (empty($username) || empty($password) || empty($firstname) || empty($lastname))  {
            header('location: form-register.php');
        }else{
            $sql = " INSERT INTO `tb_user`(`username`, `password`, `firstname`, `lastname`)";
            $sql .= " VALUES ('$username','$password','$firstname','$lastname')";
            $result = mysqli_query($conn,$sql);
            header('location: form-login.php');     
        }

    }

?>