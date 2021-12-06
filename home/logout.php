<?php
session_start();
$home = $_SESSION['href'];
session_destroy();
header('Location:'.$home);
?>