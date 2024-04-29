<?php

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $prenom = $_POST['fname'];
    $nom = $_POST['lname'];
    $email = $_POST['mail'];
    $message = $_POST['textarea'];

    // Validation des données (par exemple, vérification si les champs ne sont pas vides)
    if (empty($prenom) || empty($nom) || empty($email) || empty($message)) {
        echo "Veuillez remplir tous les champs.";
    } else {
        // Traitement des données (par exemple, enregistrement dans une base de données)
        // Dans cet exemple, nous affichons simplement les données
        echo "Prénom : " . $prenom . "<br>";
        echo "Nom : " . $nom . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Message : " . $message . "<br>";
    }
} else {
    // Si le formulaire n'a pas été soumis via POST, rediriger l'utilisateur vers le formulaire
    header("Location: index.html");
    exit;
}
?>