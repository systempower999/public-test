<?php
session_start();
$mysqli = new mysqli("localhost", "ibragahost_db", "Uc0Yv2*o", "ibragahost_db");
$user = $_SESSION['row'];
$mysqli->query("UPDATE Workers SET Log = '0' WHERE Workers.Id = {$user['id']};");
unset($_SESSION['row']);
header("Location: /");