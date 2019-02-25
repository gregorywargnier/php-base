<?php

// On inclus le fichier header.php sur la page
include(__DIR__.'/../partials/header.php');
/**
 * Récupérer les informations du film
 * 1. Récupérer l'ID dans l'URL
 * 2. Vérifier qu'il est correct (nombre entier)
 * 3. Executer la requete pour récupérer le film en BDD grâce à l'ID
 * 4. Si le film existe, on récupère les informations.
 * 5. Si le film n'existe pas, on affiche un message pour dire que le film n'existe pas. 
 */
?>
<?php 
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0; 
    
        $query = $db->prepare('SELECT * FROM movie WHERE id = :id');
         $query->bindValue(':id', $id);
         $query ->execute();

         //On récupère le film
         $movies = $query->fetch();
   //Si le film n'existe pas
     if(!$movies){
        echo 'Le film n\'existe pas';
        exit;//On arrete le script
     }

?>


<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
        <img class="img-fluid" src="assets/img/<?php echo $movies['cover'];?>" alt="<?= $movies['name']; ?>">
        </div>
        <div class="col-md-6">
            <h1><?php echo $movies['name'];?></h1>
            <p>Année de sortie</p>
            <div>
            Description
            </div>
        </div>
    </div>
</div>









<?php
  // On inclus le fichier footer.php sur la page

include(__DIR__.'/../partials/footer.php');
?>