<!--header-->
<?php

// On inclus le fichier header.php sur la page
include(__DIR__.'/../partials/header.php');
?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
      <?php
      /**
       * Dynamiser la liste des catégories
       * 1. Faire la requete SQL pour récupérer toutes les catégories.
       * 2. On récupère un résultat, un tableau de catégories.
       * 3. On parcours ce tableau et on remplace la partie HTML
       * dans la div avec la classe list-group.
       * 4. Bonus : Utiliser fetch() au lieu de fetchAll() avec un WHILE.
       */

       // Bonus fetch() - méthode alternative
     // $query = $db->query('SELECT * FROM category');
     // while($category = $query->fetch());{
      //  echo $category['name']; // Tant qu'il y a des résultats dans la requête
    //  } 
      //Bonus fetch() -methode alternative




      $query = $db->query('SELECT * FROM category');
      $category = $query->fetchAll();
      
?>

        <h1 class="my-4">Catégorie</h1>
        
        
        <div class="list-group">
        <?php
        foreach($category as $categories){ ?>
          <a href="#" class="list-group-item"> <?php echo $categories['name'];?></a>
       
      <?php } ?>
      <a href="movie_add.php" class="btn btn-primary btn-block mt-4">Ajouter un film</a>
      </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
          <?php
          /**
           * On veut afficher 3 films aléatoires dans le caroussel
           * Ces films devront être des films avec une jaquette.
           * 
           */
          $query = $db->query('SELECT * FROM movie WHERE cover IS NOT NULL ORDER BY RAND() LIMIT 3');
          $covers = $query->fetchAll();
          //var_dump($cover);
        
          ?>
          <?php
            foreach($covers as $key => $cover){ ?>
  
                
            <div class="carousel-item <?php if ( $key === 0) { echo 'active'; } ?>">
              <img class="d-block img-fluid" src="/assets/img/ <?php echo $cover['cover'] ?>" alt="">
              <div class="movie-cover" style="background-image:url(assets/img/<?php echo $cover['cover']; ?>)"></div>
            </div>
            <?php } ?>
          </div>
          <a class="carousel-control-prev secondary link" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <div>
          <span class="carousel-control-prev-icon  " aria-hidden="true"></span>
            <span class="sr-only ">Previous</span>
          </a>
          </div> 
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <div>
            <span class="carousel-control-next-icon " aria-hidden="true"></span>
            </div>
            <span class="sr-only">Next</span>
          </a>
        </div>
         


        <div class="row">

<?php
 $query = $db->query('SELECT * FROM movie');
 $movie = $query->fetchAll();
 //var_dump($movie);

?>
<?php

foreach($movie as $movies){
  
  ?>
      
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="movie_single.php?id=<?= $movies['id'];?>">
              <img class="card-img-top" src="assets/img/<?php echo $movies['cover'];?>" alt="<?= $movies['name']; ?>">
              <div class="movie-cover" style="background-image:url(assets/img/<?php echo $movies['cover']; ?>)"></div>
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="movie_single.php?id=<?= $movies['id'];?>"><?php echo $movies['name'];?></a>
                </h4>
                <h5><?php   
                $date = new dateTime ($movies['date']);
                echo $date->format('d F Y');
                ?></h5>
                <p class="card-text"><?php echo $movies['description'];?></p>
              </div>
              <div class="card-footer">
              <small class="text-muted">
              <?php 
              $stars = rand(0, 5);
              for($i = 1; $i <= 5; $i++){
                if($i <= $stars){
                  echo '&#9733';
                }else{
                  echo '&#9734';
                }
              }
               ?>
               </small>
              </div>
            </div>
          </div>
   <?php }  ?>   
         
         </div> 

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php
  // On inclus le fichier footer.php sur la page

include(__DIR__.'/../partials/footer.php');
?>

 