<?php

header('Content-Type: application.json_decode(json); charset=utf-8');

include('database.php');


$pdo = new Database;
$pdo->connect();

if (isset($_GET['id'])) {
	$results = $pdo->getUserById();
} else {
	$results = $pdo->getAllUser();
}

$retour = array();
$retour["success"] = true;
$retour["message"] = "ok";
$retour["nbrUser"] = count($results);
$retour["results"]["users"] = $results;

echo json_encode($retour);
