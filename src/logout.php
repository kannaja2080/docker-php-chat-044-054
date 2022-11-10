<?php
session_start();
session_destroy();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["firstname"]);
unset($_SESSION["lastname"]);
header("Location: form-login.php");
?>