<?php

$tekst = $_GET['tekst1'];

echo ucfirst(strtolower($tekst));
echo '<br>'

$tekst2 = $_GET['tekst2'];

$punkt = strtoupper(implode('.',str_split($tekst2)));
echo $punkt.'.';
?>
