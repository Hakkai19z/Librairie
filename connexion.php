<?php

// Start the session
session_start();
require_once 'config.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the email and password from the submitted form
    $email = $_POST['email'] ?? '';
    $password = $_POST['mot_de_passe'] ?? '';

    // Prepare the SQL query to select a user from the utilisateurs table
    $sql = "SELECT * FROM utilisateurs WHERE email = ?";
    $stmt = $pdo->prepare($sql);

    // Execute the SQL query with the submitted email
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();


    // Verify the submitted password against the hashed password from the database
    if ($utilisateur && password_verify($password, $utilisateur["mot_de_passe"])) {
        $_SESSION['utilisateur'] = $utilisateur;
        echo '<script>alert("Connexion réussie!");</script>';
        header('refresh:1;url=footer.php');
        exit;
    } else {
        // If the user doesn't exist or the password is incorrect, display an error message
        // and refresh the page back to login.php after a 2-second delay
        echo '<script>alert("Adresse email ou mot de passe incorrect.");</script>';
        header('refresh:1;url=login.php');
        exit;
    }
}