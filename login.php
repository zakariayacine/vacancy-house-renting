<?php
session_start();
$_SESSION['role'] = "client";
$_SESSION['name'] = "user";
var_dump($_POST)
?>