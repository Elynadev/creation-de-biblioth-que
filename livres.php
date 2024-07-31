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


 include ('header.php');





   

        $livre = new livre();
        
        $bibliotheque=$livre->afficherLivre();
        echo " <h1>liste des livres</h1>";
        
        foreach ($bibliotheque as $array)
        {

    
       

        echo " <p> livre N°.$array[id] </p>
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
          <td>$array[titre] </td> 
          <td> $array[auteur] </td>
          <td> $array[anné]  </td>
          <td>
                <button >Modifier</button>
                 <button>Supprimer</button>
           </td>
        </tr>
      </tbody>
      </table>";
      
      
    }
    




?>
    
</body>
</html>