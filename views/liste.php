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



<table id="liste">
  <tr>
    <th>Matriule</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Age</th>
    <th>Date de naissance</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Photos</th>
    <th>Telephone</th>
    <th>Annee</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>Germany</td>
    <td>
        <a href="#">Supprimer</a>
        <a href="#">Modifier</a>
    </td>
  </tr>

  
  
</table>

</body>