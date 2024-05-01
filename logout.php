<?php
session_start();
include_once('public_html/login.php');
$mysqli = new mysqli("localhost", "ibragahost_db", "Uc0Yv2*o", "ibragahost_db");
$trueId = $_SESSION['row']['id'];
$logset = $mysqli->query("UPDATE Workers SET Log = '0' WHERE Workers.Id = '$trueId';");
unset($_SESSION['row']);
header("Location:../index.php");
?>