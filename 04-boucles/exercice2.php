<?php
/**
 * execrice étoile
 */

echo '<h2>exercice de l étoile</h2>';


for ($i = 10; $i > 0; $i--){
    for ($j = $i; $j > 0; $j--) {
        echo '🔥';
    }
    echo '<br/>';
}


echo'--------------------------<br/>';

for($i = 0; $i < 11; $i++){
    $state = ($i === 5) ? 'visible': 'hidden';

    echo '<span style="visibility: ' . $state. ' ">🔥</span>';
}





