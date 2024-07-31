<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

form{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        margin: 30px auto;
        width: 50%;
        height: 100%;
        background-color: white;
        padding: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        font-size: 1.2em;
    }
    input{
      margin: 5px 0;
    }
    #submit{
      margin: 10px 0;
        width: 100px;
        height: 50px;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1.2em;
    }
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

        echo '<script>alert("Le livre a bien été ajouté !")</script>';
    }


       

        

        echo " <h1>liste des livres</h1>";
        $livre = new livre();
        $bibliotheque=$livre->afficherLivre();
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