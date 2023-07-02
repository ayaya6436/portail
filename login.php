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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="http://localhost/portail/assets/css/inscription.css"> -->
    <title>Login</title>
</head>
<body>
    <div class="container">
        <?php 
        if (isset($errorMsg)) {
            echo "<div>$errorMsg</div>";
        }
        ?>
        <div class="content1">
            <div class="title"><span>ORANGE DIGITAL CENTER</span></div>
        </div>

        <form action="" method="POST" class="formulaire" id="inscriptionForm">
            <div class="row-colunm">
                <label>Pseudo</label>
                <input type="text" name="pseudo" id="pseudo">
            </div>

            <div class="row-colunm">
                <label>Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="row3">
                <button type="submit" class="btn" name="connexion">Connexion</button>
            </div>
        </form>
    </div>

    <script src="../assets/js/script.js"></script>
</body>
</html>
