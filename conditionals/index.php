<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 14.12.2018
 * Time: 12:32
 */

//tingimuslaused

/*
 * if(tingimus) {
 *  tegevused, mis toimuvad siis kui tingimus kehtib
 * } else {
 *  tegevused, mis toimuvad siis kui tingimus ei kehti
 * }
 *
*/

echo '<h5>Ülesanne 1</h5>';
$arv = rand(0, 100);
if($arv % 2 == 0) {
    echo '<div style="color: green;">'.$arv.'</div>';
} else {
    echo '<div style="color: red;">'.$arv.'</div>';
}