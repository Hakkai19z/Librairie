<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="Signup.css">
</head>
</html>
<div class='container'>
    <h1>S'inscrire : </h1>
    <form action="inscription.php" method="post">
        <div class="form-group">
            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom..." required><br>
            <label for="prenom">Prénom:</label><br>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom..." required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Entrez votre email..." required><br>
            <label for="mot_de_passe">Mot de passe:</label><br>
            <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Entrez votre mot de passe..." required><br>
        </div>
        <input type="submit" class="btn btn-primary" value="S'enregistrer">
</div>
</form>