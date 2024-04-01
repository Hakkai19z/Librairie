document.querySelector('.submit').addEventListener('click', function(event) {
    event.preventDefault();

    // récupérer la valeur de l'input de recherche
    var searchInput = document.getElementById('search-input').value;

    // construire l'URL de l'API avec la clé API et la valeur de l'input de recherche
    var url = 'https://www.googleapis.com/books/v1/volumes?q=' + encodeURIComponent(searchInput) + '&subject=geography&langRestrict=fr';

    // envoyer une requête à l'API Google Books
    fetch(url)
      .then(response => response.json())
      .then(data => {
            console.log(data); // ajouter un log pour voir la réponse de l'API

            // afficher les résultats de la recherche
            var resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = ''; // effacer les résultats précédents
            data.items.forEach(item => {
                var bookDiv = document.createElement('div');
                bookDiv.classList.add('book-result'); // ajouter une classe CSS
                bookDiv.innerHTML = `<h3>${item.volumeInfo.title}</h3>`;
                if (item.volumeInfo.authors) {
                    bookDiv.innerHTML += `<p>Auteurs: ${item.volumeInfo.authors.join(', ')}</p>`;
                }
                if (item.volumeInfo.publisher) {
                    bookDiv.innerHTML += `<p>Éditeur: ${item.volumeInfo.publisher}</p>`;
                }
                if (item.volumeInfo.publishedDate) {
                    bookDiv.innerHTML += `<p>Date de publication: ${item.volumeInfo.publishedDate}</p>`;
                }
                if (item.volumeInfo.description) {
                    bookDiv.innerHTML += `<p>Description: ${item.volumeInfo.description}</p>`;
                }
                if (item.volumeInfo.industryIdentifiers) {
                    bookDiv.innerHTML += `<p>Industry Identifiers:</p><ul>`;
                    item.volumeInfo.industryIdentifiers.forEach(identifier => {
                        bookDiv.innerHTML += `<li>${identifier.type}: ${identifier.identifier}</li>`;
                    });
                    bookDiv.innerHTML += `</ul>`;
                }
                if (item.volumeInfo.categories) {
                    bookDiv.innerHTML += `<p>Catégories:</p><ul>`;
                    item.volumeInfo.categories.forEach(category => {
                        bookDiv.innerHTML += `<li>${category}</li>`;
                    });
                    bookDiv.innerHTML += `</ul>`;
                }
                if (item.volumeInfo.imageLinks) {
                    bookDiv.innerHTML += `<img src="${item.volumeInfo.imageLinks.thumbnail}" alt="${item.volumeInfo.title}">`;
                }
                resultsDiv.appendChild(bookDiv);
            });
        })
      .catch(error => console.error('Erreur :', error));
});