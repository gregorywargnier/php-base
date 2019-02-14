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

function conjuguer($verbe){
$racine = substr($verbe, 0, -2);//cherch
$terminaison = substr($verbe, -2);//er

    $sujets = [
        'je' => 'e',
        'tu' => 'es',
        'il/elle/on' => 'e',
        'nous' => 'ons',
        'vous' => 'ez',
        'ils/elles' => 'ent'
    ];

    // j'exception (ajouter, inclure, enlever)
    $voyelles = ['a', 'e', 'i', 'o', 'u'];
    //Est-ce que la première lettre de la racine est une voyelle ?
    if(in_array(substr($racine, 0 , 1), $voyelles) ) {
        unset($sujets['je']);//On supprime le je du tableau
        //$sujets['j\''] ='e';
        $sujets = array_merge(['j\'' => 'e'], $sujets); //On peut fusionner des tableaux
    }


    //*G exception
    if(substr($racine, -1) === 'g') {
        $sujets['nous'] = 'eons';
    }

    $html = ' ';
        foreach($sujets as $pronom => $conjuguaison){
            $html .= $pronom . ' '. $racine . $conjuguaison . '<br/>';
        }
            return $html;
}
echo conjuguer('chercher');
echo conjuguer ('manger');
echo conjuguer ('ajouter');