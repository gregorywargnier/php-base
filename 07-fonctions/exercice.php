<?php

//1.Créer une fonction calculant le carré d'un nombre
function square($cote) {
    return $cote*$cote;
}

echo square(5);//25

echo '<br/>------------------<br/>';
//2.Créer une fonction calculant l'aire d'un rectangle et une fonction pour celle d'un cercle
function aireRectangle($longueur, $largeur) {
    return $longueur*$largeur;
}

echo aireRectangle(10, 5);//50
echo '<br/>------------------<br/>';
function aireCercle($rayon) {
    return 3.14*($rayon*$rayon);
}
echo aireCercle(10);//314

echo '<br/>------------------<br/>';
//3.Créer une fonction calculant le prix TTC d'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux.

function convertirHTversTTC($PHT, $TTC) {
    return ($PHT*($TTC/100))+$PHT;
}
echo convertirHTversTTC(10, 20) ;// 12 euros TTC

echo '<br/>------------------<br/>';
//4.Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT)
function convertirTTCversHT($PHT, $TX, $direction = true)  {
    if($direction){

        //le return arrête la fonction
        return ($PHT*$TX);
    }else{
        return $PHT/$TX;
    }
    
    
}
echo convertirTTCversHT(12, 1.20, false) ;