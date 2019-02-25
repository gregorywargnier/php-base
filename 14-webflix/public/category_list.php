<?php
/**
 * Sur cette page, on affichera la liste des catégories. Il n'y aura pas la sidebar ni le carousel.
 * On pourra cliquer sur une catégorie, par exemple, si on clique sur la catégorie 5, on va sur
 * le lien category_single?id=5.
 */

include(__DIR__.'/../partials/header.php');
?>
<?php

$query = $db->query('SELECT * FROM category');
$category = $query->fetchAll(); ?>

<div class="container my-5">
    <div class="row">
        <?php foreach ($category as $categories) { ?>
            <div class="col-md-3 mb-5">
                <h2 class="text-center">
                    <a href="category_single.php?id=<?php echo $categories['id']; ?>">
                        <?= $categories['name']; ?>
                    </a>
                </h2>
            </div>
        <?php } ?>
    </div>
</div>

 
      
       
     































<?php
  // On inclus le fichier footer.php sur la page

include(__DIR__.'/../partials/footer.php');
?>