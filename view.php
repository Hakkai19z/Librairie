<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="books.js"></script>
</head>
<body>
    <div class="container">
        <h1>Bibliothèque</h1>
        <form action="ajouter_bibliotheque_personnel.php" method="post">
            <input type="hidden" id="livre_id" name="livre_id" value="">
            <button type="submit" class="btn btn-primary">Ajouter à ma bibliothèque</button>
        </form>
        <ul id="livres">
            <!-- Afficher les livres ici -->
        </ul>
    </div>
</body>
</html>