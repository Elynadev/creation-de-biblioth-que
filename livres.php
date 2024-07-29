<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  text-align: left;
  background-color: #f0f0f0;
}
    </style>

</head>
</head>
<body>
    <?php
  
require_once('gestion.php');
require_once('header.php');
$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$annee = $_POST['annee'];
     echo " <h1>liste livres</h1>
  <table>
<thead>
  <tr>
    <th>titre</th>
    <th>auteur</th>
    <th>Année</th>
    
  </tr>
</thead>
<tbody>
  <tr>
    <td> $titre </td> 
    <td> $auteur</td>
    <td>  $annee</td>
    
  </tr>
</tbody>
</table>";


  echo "<tr>";
  echo "<td>id</td>";
  echo "<td>titre</td>";
  echo "<td>auteur</td>";
  echo "<td>annee</td>";
  echo "</tr>";


?>

 

    
</body>
</html>