<?php
echo '<h1>exercice</h1>';
// 1/ Acronyme : Créer une fonction qui prend en argument une chaine (World of Warcraft) et qui retourne les initiales de chaque mot en majuscule (WOW).
function acronym($sentence)
{
    $words = explode(" ", $sentence);//tableau avec tous les mots de la phrase
    $initiale = '';
 
	foreach($words as $word){
		echo $word[0];//premiere lettre du mot 
    }
   
}

echo acronym('World Of Warcraft'). '<br/>';
echo acronym ('Hyper Text Markup Language'). '<br/>';

// 2/Conjugaison : Créer une fonction qui permet de conjuguer un verbe (chercher par exemple). Cela doit renvoyer toutes les conjugaisons au présent.


