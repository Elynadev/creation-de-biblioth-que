<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    
<?php
 
include ('header.php');

echo '<h1>Bienvenue au rayon des livres</h1>
      <p> Faites le point de vos livres lus ou posséder...<p>
      <p>suivez-nous</p>

   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/livre.php">Ajouter un livre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/livres.php">Voir tous les livres </a>
        </li>
      </ul>
  </di>
</nav>

';




include ('data/livres.php');





include ('footer.php');

?>
</body>
</html>