<?php

require 'connexion.php';

$response = $database->query("SELECT * FROM task");
$response = $response->fetchAll();

echo json_encode($response);

 ?>
