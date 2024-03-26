<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
</head>

</html>

<body>
    <div class="container">
        <h1>Connexion</h1>
        <form action="connexion.php" method="post">
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email..." required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" placeholder="Votre mot de passe..." required>
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
            <p>Vous n'avez pas de compte? <a href="signup.php">Inscrivez-vous ici</a></p>
        </form>
    </div>
</body>

