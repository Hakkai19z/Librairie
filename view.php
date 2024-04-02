<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <script src="books.js" defer></script>
    <link rel="stylesheet" href="view.css">
</head>

<body>
    <!-- <h1>Notre bibliothèque virtuelle</h1> -->
    <section id="search-section">
        <form id="search-form">
            <input type="text" id="search-input" placeholder="Rechercher un livre">
            <select class="zebi">
                <option value="">Catégorie</option>
                <option value="fiction">Fiction</option>
                <option value="history">Histoire</option>
                <option value="science">Science</option>
                <option value="technology">Technologie</option>
                <option value="biography">Biographie</option>
                <option value="Roman">Roman</option>
            </select>
            <button type="submit" class="submit">Rechercher</button>
        </form>
        <div id="results"></div>
    </section>
</body>

</html>