<?php


$age = 17;



if($age >= 18){
    echo 'vous pouvez entrer';
} elseif ($age >= 16 && $age < 18) {
    echo 'vous êtes presque majeur';
} elseif ($age >= 14 && $age < 16) {
    echo 'vous êtes jeune';
} else{
    echo 'Vous êtes jeune';
}