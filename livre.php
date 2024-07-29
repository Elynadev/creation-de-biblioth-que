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
<body>
    
<?php
require_once('gestion.php');
 include ('header.php');

echo '<h1> Quel livre voulez-vous ajouter ?</h1>

    <form action="livre.php" method="post">
        <label for="titre">Titre du livre:</label>
        <input type="text" id="titre" name="titre" required>

        <label for="auteur">Auteur:</label>
        <input type="text" id="auteur" name="auteur" required>

        <label for="annee">Année de publication:</label>
        <input type="number" id="annee" name="annee" required>

        <button type="submit" name="ajouter">Ajouter</button>
        <br><br>
    </form>
    ';



    //ajouter un livre

    if (isset($_POST['ajouter']) ) {
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $annee = $_POST['annee'];
        
        $titre=htmlspecialchars($titre);
        $auteur=htmlspecialchars($auteur);
        $annee=htmlspecialchars($annee);


        $livre = new livre();
        $livre->insert($titre, $auteur, $annee);

        echo '<script>alert("Le livre a bien été ajouté !")</script><h1>Le livre a bien été ajouté !</h1>';

        $bibliotheque=$livre->afficherLivre();

        // print_r($bibliotheque);
        // $suppression =$livre->delete("4");
        // print_r ($suppression);
   
        
 
    
        foreach($bibliotheque as $livre) {
    

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
      
      
       
    }


}

?>
</body>
</html>