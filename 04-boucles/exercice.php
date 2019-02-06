<?php


/**
 * exercice
 */

 //exercice 1

 echo '<h2>exercice 1</h2>';
for($i = 10 ; $i > 0 ; --$i) {
echo $i . ' - ';
} 

//exercice 2

echo '<h2>exercice 2</h2>';

$i = 0;
while ($i++ < 100) {
     if(0 ==  $i % 2 ){ //yoda condition
        echo $i . ' - ';
    } 
}

//exercice 3

echo '<h2>exercice 3</h2>';
/*96-36 = 60;
36-24 = 24;
24-13 = 12;
12-12 = 0;*/

$number1 = $cloneNumber1 = 96;
$number2 = $cloneNumber2 = 36;
$result = 0;

while($result == 0){
    if($number1 > $number2){
        $number1 = $number1 - $number2;
    }else {
        $number2 = $number2 - $number1;
    }
    if($number2 == 0){
        $result = $number1;
    }
}
echo 'Le PGCD de ' . $cloneNumber1 . ' et ' . $cloneNumber2 . ' est ' . $result;
 //exercice 4

echo '<h2>exercice 4</h2>';


for ($i = 0; $i < 100; $i++) {
     if ($i % 15 == 0){
        echo 'FizzBuzz <br/>' ;

    } elseif($i % 5 == 0) {

        echo 'Buzz <br/> ';
    } elseif($i % 3 == 0) {
        echo 'Fizz <br/>' ;
    } else{
        echo $i . '<br/>';
    }
}


/**
 * execrice étoile
 */

echo '<h2>exercice de l étoile</h2>';

$i = '*';
for($i = 0 ; $i <10 ; $i++){
    echo $i;
    }