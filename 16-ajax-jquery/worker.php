<?php



//Pour etre sur que la requete est en POST
if ('POST' === $_SERVER['REQUEST_METHOD']) {
echo $_POST['foo'];
}
echo 'Ajax';