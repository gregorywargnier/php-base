<?php


$age = 17;



if($age >= 18){
    echo 'vous pouvez entrer';
} else if ($age >= 16 && $age < 18) {
    echo 'vous êtes presque majeur';
} else if ($age >= 14 && $age < 16) {
    echo 'vous êtes jeune';
} else{
    echo 'Vous êtes jeune';
}