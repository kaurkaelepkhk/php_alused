<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 21.01.2019
 * Time: 12:27
 */

$vali = $_GET['input1'];
$formatted = strtoupper(implode('.',str_split($vali)));
echo $formatted.'.';

?>


