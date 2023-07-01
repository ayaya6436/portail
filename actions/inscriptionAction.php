<?php 
require '../config/dbConnect.php';

if (isset($_POST["enregistrer"])) {

    $matricule = htmlspecialchars($_POST["matricule"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $age = htmlspecialchars($_POST["age"]);
    $dateNaissance = htmlspecialchars($_POST["dateNaissance"]);
    $email = htmlspecialchars($_POST["email"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $promotionId = htmlspecialchars($_POST["promotionId"]);
    $promotionAnnee = htmlspecialchars($_POST["promotionAnnee"]);

    if (!empty($_FILES['photo']['name'])) {
        $photo = $_FILES['photo'];

        // Chemin de destination pour sauvegarder l'image
        $photoPath = '../assets/images/' . $photo['name'];

        // Déplacement du fichier vers le dossier de destination
        move_uploaded_file($photo['tmp_name'], $photoPath);
    } else {
        $errorMsg = "Veuillez sélectionner une photo.";
    }
    
    if(!empty($matricule) && !empty($nom) && !empty($prenom) && !empty($age) && !empty($dateNaissance)
        && !empty($email) && !empty($telephone) && !empty($telephone)  && !empty($photo) 
        && !empty($promotionId) && !empty($promotionAnnee)
    ){
        $req = $db->prepare("INSERT INTO apprenant (matricule,nom,prenom,age,dateNaissance,email,telephone,photo,promotionId,promotionAnnee)
        values(?,?,?,?,?,?,?,?,?,?)");
        $req->execute(array(
            $matricule,
            $nom,
            $prenom,
            $age,
            $dateNaissance,
            $email,
            $telephone,
            $photoPath,
            $promotionId,
            $promotionAnnee 

            
        ));

        header("Location:liste.php");

    }else{
        $errorMsg = "Veuillez remplir tous les champs...";
    }


}

?>