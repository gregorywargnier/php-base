<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>formulaire</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
</head>
<body>
<div class='container'>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">adresse mail</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@example.com">
  </div>
  <div class="form-group">
  <label for="exampleFormControlSujet1">sujet</label>
  <input class="form-control" type="text" id="exampleFormControlSujet1" placeholder="veuillez écrire votre sujet..." >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
<button class="btn btn-primary" type="submit">valider</button>
</div>
</body>
<?php
$mail = 'nom@example.com';
$message ='a';
$sujet = ' ';


// boucle
if(strlen($sujet) == 0){
  echo 'votre sujet ne doit pas être vide';
}
if (false == filter_var($email, FILTER_VALIDATE_EMAIL)) {
  exit('Cet email est important');
}

if (!ctype_digit($message)) {
  exit('Le nombre1 n\'est pas un nombre valide');
}
</html>