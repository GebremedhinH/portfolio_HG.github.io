fetch('footer2.html')
    .then(response => response.text())
    .then(html => {
        // Insérer le contenu dans le footer
        document.getElementById('footer').innerHTML = html;
    });