
<?php require '../config/dbConnect.php';  ?>
<!DOCTYPE html>
<html>
<head>
<style>
    a{
        color: black;
        text-decoration: none;
    }
#liste {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

h1{
  text-align:center;
}

#liste td, #liste th {
  border: 1px solid #ddd;
  padding: 8px;
}

#liste tr:nth-child(even){background-color: #f2f2f2;}

#liste tr:hover {background-color: #ddd;}

#liste th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ffb100;
  color: white;
}
</style>
</head>
<body>
<h1>Liste des apprenant</h1>
<?php
  $req = $db->query("SELECT * FROM apprenant");
  $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
  
?>

<table id="liste">

  <tr>
    
    <th>Numero</th>
    <th>Matriule</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Age</th>
    <th>Date de naissance</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Photos</th>
    <th>Promotion</th>
    <th>Annee</th>
    <th>Actions</th>
  </tr>
  <tr>

  <?php
                $req = $db->query("select * from apprenant");
                $i =1;
                while ($row =$req->fetch()) {
                   echo "<tr>";
                    echo "<th>".$i."</th>";
                    echo "<td>".$row['matricule']."</td>";
                    echo "<td>".$row['nom']."</td>";
                    echo "<td>".$row['prenom']."</td>";
                    echo "<td>".$row['age']."</td>";
                    echo "<td>".$row['dateNaissance']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['telephone']."</td>";
                    echo "<td><img src='../assets/images/".$row['photo']."' alt='Photo' width='100'></td>";
                    echo "<td>".$row['promotionId']."</td>";
                    echo "<td>".$row['promotionAnnee']."</td>";
                    echo '<td>
                            <a href="inscription.php?id=' .$row['id']. '">Editer</a>
                            <a href="liste.php?ids=' .$row['id']. '">Supprimer</a>
                        </td>';
                        $i++;
                echo"</tr>";
                }
           
            ?>

</table>

</body>