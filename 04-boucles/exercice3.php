<?php
/**
 * Afficher les tables de multiplication de 0 à 10.
 * 
 */
echo'<h1> tables de multiplication</h1>';


echo'<table border="1" style="border-collapse: collapse">';
//legende du tableau
echo '<thead><tr>';
echo '<td align="center" style="width:20px; background-color: lightgrey">x</td>';
for ($z=0; $z <= 10; $z++)
{
    $color= ($z % 2 )? 'lightgrey' : 'white';
echo '<td align ="center" style="width:20px; background-color: '.$color.'">'. $z. '</td>';
}
echo '</tr> </thead>';
for ($i=0; $i <= 10; $i++)
{
    $color= ($i % 2 )? 'lightgrey' : 'white';
    $direction = ($color === 'lightgrey') ? 1:0; //sens de direction
  echo '<tr>';
  echo '<td align="center" style="width:20px; background-color: '.$color.'">'.$i. '</td>';
    for ($j=0; $j <= 10; $j++)
    {
        $color= ($j % 2 === $direction )? 'lightgrey' : 'white';
        $color = ($i == $j) ? 'grey' : $color ; //gris foncé sur le carré

            echo '<td align="center" style="width:20px; background-color: '.$color.'">'.$i*$j . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

