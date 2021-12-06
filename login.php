<?php
session_start();
$_SESSION['role'] = "client";
$_SESSION['name'] = "zakaria";
include "env.php";
header('Location:'.$_SESSION['href'].'home');
?>