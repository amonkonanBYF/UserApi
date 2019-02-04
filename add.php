<?php

header('Content-Type: application.json_decode(json); charset=utf-8');

include('database.php');

$pdo = new Database;
$pdo->connect();

















































/*
$dbname = "dbuserapi";
$user = "root";
$password = "";
$host = "localhost";

$retour = array();
$retour["success"] = true;
$retour["message"] = "ok";
//$retour["results"]["user"] = array("jean","paul");

try{
	$pdo = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
	
}catch (PDOException $e) {
	//print "Erreur !: " . $e->getMessage() . "<br/>";
	$retour['success'] = false;
	$retour['message'] = 'Connection a la base a échoué';
	die();
}

if (!empty($_POST["users"]) ) {
	$req = $pdo->prepare("SELECT * FROM user ");
	$req->execute();
	
}
if (!empty($_POST["user"]) ) {
	$req = $pdo->prepare("SELECT * FROM user WHERE id = :id");
	$req->bindParam(':id', $_POST["user"]);
	$req->execute();
	
}
$results = $req->fetchAll();


$retour["success"] = true;
$retour["message"] = "ok";
$retour["nbrUser"] = count($results);
$retour["results"]["users"] = $results;
echo json_encode($retour);
*/