<?php require '../actions/inscriptionAction.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/portail/assets/css/inscription.css">
    <title>Formulaire</title>
</head>
<body>
    <div class="container">
            <?php 
                if(isset($errorMsg)){
                    echo "<div > $errorMsg </div>";
                }
            ?> 
                <div class="content1">
                    <div class="title"><span>ORANGE DIGITAL CENTER</span></div>

                </div>
                
            <form action="" method="POST" class="formulaire" id="inscriptionForm" enctype="multipart/form-data">
           
            <div class="row1">
                    

                    <div class="row-colunm">
                        <label>Nom</label>
                        <input type="text" name="nom" id="nom">
                    </div>

                    <div class="row-colunm">
                        <label>Prenom</label>
                        <input type="text" name="prenom" id="prenom">
                    </div>

                    <div class="row-colunm">
                        <label>Age</label>
                        <input type="text" name="age" id="age">
                    </div>

                    <div class="row-colunm">
                        <label>Date de naissance</label>
                        <input type="date" name="dateNaissance" id="dateNaissance">
                    </div>
                </div>

                <div class="row2">
                    <div class="row-colunm">
                        <label>Email</label>
                        <input type="email" name="email" id="email">
                    </div>

                    <div class="row-colunm">
                        <label>Telephone</label>
                        <input type="text" name="telephone" id="telephone">
                    </div>

                    <div class="row-colunm">
                        <label>Photos</label>
                        <input type="file" name="photo" id="photo">
                    </div>

                    <div class="row-colunm">
                        <label>Promotion</label>
                        <select name="promotionId" type="text" id="promotionId">
                            <!-- <option value="ODK3">ODK3</option> -->
                            <option value="2">ODK2</option>
                            <option value="1">ODK1</option>
                        </select>
                    </div>

                    <div class="row-colunm">
                        <label >Annee</label>
                        <input type="date" name="promotionAnnee" id="promotionAnnee">
                    </div>
                </div>

                

                <div class="row3">
                    <button type="submit" class="btn" name="enregistrer">Enregistrer</button>
                </div>
                
            </form>

            
            

            
      
    </div>

    <!-- <script src="../assets/js/script.js"></script> -->
    <script src="../assets/js/script.js"></script> 
</body>
</html>