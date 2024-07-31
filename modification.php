<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
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
<body>
 </style>   
<?php
require_once('gestion.php');
 include ('header.php');


 echo"bonjour";

 echo '<h1> Modifiez le livre ici..</h1>
  <section class="formulaire">
    <form action="livre.php" method="post">
        <label for="titre">Titre du livre:</label>
        <input type="text" id="titre" name="titre" placehorder="" required>

        <label for="auteur">Auteur:</label>
        <input type="text" id="auteur" name="auteur" required>

        <label for="annee">Année de publication:</label>
        <input type="number" id="annee" name="annee" required>

        <button type="submit" name="modifier" class="btn btn-secondary">Ajouter</button>

        <br><br>
    </form>
      </section>
    ';


?>
</body>
</html>