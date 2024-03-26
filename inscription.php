<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);
    $password_hash = md5($mot_de_passe);
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $password_hash]);
    // Display the success message
    echo '<script>alert("Votre profil a été créé avec succès!");</script>';
    header('refresh:1;url=login.php');
    exit;
}

// Check if the success message is present in the session
if (isset ($_SESSION['success_message'])) {
    // Display the alert message and remove it from the session
    echo "<script>alert('{$_SESSION['success_message']}')</script>";
    unset($_SESSION['success_message']);
}
