<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }

        #menu {
            background-color: #ddd;
            padding: 10px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        section {
            margin: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            position: left;
            bottom: 0;
            width: ;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (empty($nom) || empty($email) || empty($message)) {
        echo "<p style='color: red;'>Veuillez remplir tous les champs du formulaire.</p>";
    } else {
        echo "<p style='color: green;'>Votre message a été soumis avec succès :</p>";
        echo "<p><strong>Nom :</strong> $nom</p>";
        echo "<p><strong>Email :</strong> $email</p>";
        echo "<p><strong>Message :</strong> $message</p>";
    }
}
?>

    <header>
        <h1>Serigne Sidy NDACK</h1>
        <p>Titulaire d'un DEUST,je suis actuellement etudiant en licence 3 en SITD</p>
    </header>

    <div id="menu">
        <nav>
            <ul>
                <li><a href="#photo">Photo</a></li>
                <li><a href="#infos">Informations Personnelles</a></li>
                <li><a href="#education">Cursus Scolaire</a></li>
                <li><a href="#experience">Expériences Professionnelles</a></li>
                <li><a href="#contact">Contacter Moi</a></li>
            </ul>
        </nav>
    </div>

    <section id="photo">
        <h2>Ma Photo</h2>
        <img src="TP HTML/PHOTO.JPG" alt="Votre Photo">
    </section>

    <section id="infos">
        <h2>Informations Personnelles</h2>
        <p>Nom: Serigne Sidy NDACK</p>
        <p>Date de Naissance: 15/02/2001</p>
       
    </section>

    <section id="education">
        <h2>Cursus Scolaire</h2>
        <p>École/Université: Universite Hassan 1er</p>
        <p>Diplôme: DEUST</p>
        <p>Année d'obtention: 2023</p> <br>
        <p>École/Université: Lycee d'Enseignement General de Diourbel</p>
        <p>Diplôme: Baccalaureat</p>
        <p>Année d'obtention: 2021</p>
       
    </section>

    <section id="experience">
        <h2>Expériences Professionnelles</h2>
        <p>Poste: Charge de TD</p>
        <p>Entreprise: Association des Etudiants Ressortissants de Diourbel</p>
        <p>juillet 2021 - Septembre 2021</p>
        <p>Dispenser des cours</p>
       
        <section id="contact">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Validation
        $erreurs = [];

        if (empty($nom)) {
            $erreurs[] = "Le champ Nom est obligatoire.";
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erreurs[] = "Le champ Email est obligatoire et doit être une adresse e-mail valide.";
        }

        if (empty($message)) {
            $erreurs[] = "Le champ Message est obligatoire.";
        }

        // Si des erreurs sont présentes, les afficher
        if (!empty($erreurs)) {
            foreach ($erreurs as $erreur) {
                echo "<p style='color: red;'>$erreur</p>";
            }
        } else {
            // Envoyer l'e-mail ici si tout est valide
            // ...
            echo "<p style='color: green;'>Votre message a été envoyé avec succès.</p>";
        }
    }
    ?>

    <h2>Contacter Moi</h2>
    <form method="post" action="">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Valider</button>
        <button type="reset">Réinitialiser</button>

       

    </form>
</section>


    <footer>
        <p>© 2023 - NDACK Serigne Sidy</p>
    </footer>

   
</body>
</html>