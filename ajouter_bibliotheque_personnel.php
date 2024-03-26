<?php
session_start();
require_once 'config.php';

$livre_id = $_POST['livre_id'];
$utilisateur_id = $_SESSION['utilisateur']->id;

$sql = "INSERT INTO bibliotheque_personnel (utilisateur_id, livre_id) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$utilisateur_id, $livre_id]);
