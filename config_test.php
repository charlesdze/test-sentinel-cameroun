<?php
$host = "localhost";
$user = "admin";
$pass = "123456"; // Mot de passe en dur (Hardcoded Password)

eval($_GET['code']); // Fonction très dangereuse (Dangerous Function)

$query = "SELECT * FROM users WHERE id = " . $_GET['id']; // Risque d'injection SQL
?>
