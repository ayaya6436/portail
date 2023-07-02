<?php
if (isset($_SESSION['auth'])) {
    // L'utilisateur est déjà connecté, redirigez-le vers la page d'accueil ou une autre page sécurisée
    header("Location: index.php");
    exit();
}

require 'config/dbConnect.php';

if (isset($_POST['connexion'])) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    if (!empty($pseudo) && !empty($password)) {
        $pseudo = htmlspecialchars($pseudo);

        // Vérifier si le pseudo existe dans la table "formateur"
        $verifUserExist = $db->prepare("SELECT * FROM formateur WHERE pseudo = ?");
        $verifUserExist->execute([$pseudo]);

        if ($verifUserExist->rowCount() > 0) {
            $userInfo = $verifUserExist->fetch();

            // Vérifier si le mot de passe saisi correspond au mot de passe enregistré dans la base de données
            if ($password === $userInfo["password"]) {
                $_SESSION['auth'] = true;
                $_SESSION['pseudo'] = $userInfo['pseudo'];
                header("Location: index.php");
                exit();
            } else {
                $errorMsg = "Votre mot de passe est incorrect";
            }
        } else {
            $errorMsg = "Votre pseudo est incorrect";
        }
    } else {
        $errorMsg = "Veuillez remplir tous les champs";
    }
}
?>