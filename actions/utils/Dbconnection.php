<?php

define("USERNAME", "root");
define("PASSWORD", "bassem1234");

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=TP4", USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur in connexion" . $e->getMessage();
}

?>