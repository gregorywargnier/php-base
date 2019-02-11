<?php
echo'<h1>Dates</h1>';
$seconds = date('s');
echo date ('l d F Y');
echo ', il est ';
echo date ('H\hi \e\t ');
echo $seconds . 'seconde';
echo ($seconds >1) ? 's' : '';