<?php

// Changer les identifiants
define('DB_HOST', 'localhost');
define('DB_NAME', 'netflix2');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// On crée la connexion à la BDD
$db = new PDO(
    'mysql:host='.DB_HOST.';port=3306;dbname='.DB_NAME.';charset=UTF8',
    DB_USER,
    DB_PASSWORD,
    // On active les erreurs PDO
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
);

// Ecrire une requête qui récupère un film par son ID

if(!empty($_GET['id'])) { //si l'id existe dans l'URL


    $id =intval($_GET['id']); // On recupere l'id dans l'URL
    
} else {

    die('Error'); //On arrête le script PHP et on affiche un message
}
$query = $db->query('SELECT * FROM movie WHERE id= '.$id);

$movies = $query->fetch(PDO::FETCH_ASSOC);

// Si le film existe en BDD
if($movies){
    // On affiche le nom du film
    echo $movies['name'];
}else {
echo 'Le film n\'existe pas';
}

// L'ID doit provenir de l'URL
// Exemple : Si je saisis movie.php?id=4, la requête doit
// récupérer le film avec l'id 4
// Sur la page, on affichera le titre du film récupéré