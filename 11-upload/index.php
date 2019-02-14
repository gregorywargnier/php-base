<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Formulaire d'upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <h1>Upload en PHP</h1>
    <form action=""  method= "post" enctype ="multipart/form-data">
        <input type = "file" name= "image">
        <button class="btn btn-primary">uploader</button>
    </form>   
    <?php

    var_dump($_FILES);
    if(!empty($_FILES['image'])){
        //On récupere le fichier temporaire
        $tmpFile = $_FILES['image']['tmp_name'];
        //On récupere le nom du fichier
        $fileName = $_FILES['image']['name'];
        //générer un nom de fichier unique :
        //fddamiens.png -> fddamiens_a3d45fe4.png
        $fileName = substr(md5(time()), 0, 8) . '_' . $fileName;
        //On déplace à l'endroit désiré
        move_uploaded_file($tmpFile, __DIR__. '/upload/'.$fileName);
     
    }
   
    ?>

</div>    
</body>
</html>