function rechercherLivres(genre) {
    const apiKey = 'VOTRE_CLE_API_GOOGLE_BOOKS';
    const url = `https://www.googleapis.com/books/v1/volumes?q=subject:${genre}&key=${apiKey}`;
    fetch(url)
        .then(response => response.json())
        .then(data => {
            const liste = document.getElementById('livres');
            data.items.forEach(item => {
                const li = document.createElement('li');
                li.innerHTML = `
                    <img src="${item.volumeInfo.imageLinks.thumbnail}" alt="${item.volumeInfo.title}">
                    <h2>${item.volumeInfo.title}</h2>
                    <p>${item.volumeInfo.authors ? item.volumeInfo.authors.join(', ') : ''}</p>
                `;
                li.querySelector('button').addEventListener('click', () => {
                    document.getElementById('livre_id').value = item.id;
                });
                liste.appendChild(li);
            });
        });
}