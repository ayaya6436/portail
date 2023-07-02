<?php require "./actions/loginAction.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/portail/assets/css/login.css">
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

        <form action="" method="POST" id="inscriptionForm">
            <div class="formulaire">
            <div class="row-colunm">
                <label>Pseudo</label>
                <input type="text" name="pseudo" id="pseudo">
            </div>

            <div class="row-colunm">
                <label>Password</label>
                <input type="password" name="password" id="password">
            </div>

            </div>
            <div class="row3">
                    <input type="submit" name="connexion" class="btn" value="Connexion">
                </div>
        </form>
    </div>

    <script src="../assets/js/script.js"></script>
</body>
</html>
