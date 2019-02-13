<?php

//Les superglobales
//On peut acceder aux données dans l'URL grace à $_GET

var_dump($_GET);

//Pour obtenir des informations sur le serveur et le client 
var_dump($_SERVER);

//récupere l'adresse ip de l'utilisateur
var_dump($_SERVER['remote_ADDR']);