<?php
session_start();

unset($_SESSION['MaTaiKhoan']);

header("Location: ../index.php");
?>