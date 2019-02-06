<?php



/**
 * 
 * Présentation des boucles en PHP
 */





//For
echo '<h2> La boucle For</h2>';
for($i = 0 ; $i <10 ; $i++){
echo $i;
}



//Foreach
echo '<h2> La boucle Foreach</h2>';

$students = ['mickael', 'Baptiste', 'gregory', 'thomas'];
foreach( $students as $prout => $students){
    echo $prout . ' : '. $students . '<br/>';
}


//While
echo '<h2> La boucle While</h2>';

$i = 0;
while ($i++ < 10) {
    echo $i;
}


//do...while
echo '<h2> La boucle do...while</h2>';

$i = 10;
do{
    echo $i++;
}while($i < 10);



