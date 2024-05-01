<?php
session_start();
$user = $_SESSION['row'];
$mysqli = new mysqli("localhost", "ibragahost_db", "Uc0Yv2*o", "ibragahost_db");
$mysqli->query("UPDATE Workers SET Log = '0' WHERE Workers.Id = {$user['id']};");
unset($user);
header("Location: /");