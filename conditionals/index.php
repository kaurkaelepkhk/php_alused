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
 * } else if(tingimus2) {
 *  tegevus, mis toimuvad siis kui esimene tingimus ei kehti
 * } else {
 *  tegevused, mis toimuvad siis kui tingimused ei kehti
 * }
 *
*/

/*
 *
 *  switch (kontroll) {
 *    case vastus:
 *          tegevused, mis antud case puhul toimuvad
 *          break;
 *    default:
 *          tegevused, mis toimuvad siis kui midagi muud ei sobi
 *          break;
 * }
 *
 *
 *
 *
 *
 *
*/

//echo '<h5>Ülesanne 1</h5>';
//$arv = rand(0, 100);
//if($arv % 2 == 0) {
//    echo '<div style="color: green;">'.$arv.'</div>';
//} else {
//    echo '<div style="color: red;">'.$arv.'</div>';
//}

//echo '<h5>Ülesanne 2</h5>';
//$arv = rand(0, 100);
//if($arv >= 0 and $arv < 25) {
//    echo '<div style="color: red">'.$arv.'</div>';
//} else if($arv >= 25 and $arv < 50) {
//    echo '<div style="color: green">'.$arv.'</div>';
//} else if($arv >= 50 and $arv < 75) {
//    echo '<div style="color: blue">'.$arv.'</div>';
//} else if($arv >= 75 and $arv < 100) {
//    echo '<div style="color: orange">'.$arv.'</div>';
//} else {
//    echo '<div style="color: black">'.$arv.'</div>';
//}

?>
<style>
    div {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid black;
    }
</style>

<?php
echo '<h5>Ülesanne 3</h5>';
$aktiivne = 'kollane';
switch ($aktiivne) {
    case 'punane':
        echo '<div style="background: red;"></div>';
        echo '<div></div>';
        echo '<div></div>';
        break;
    case 'kollane':
        echo '<div></div>';
        echo '<div style="background: yellow;"></div>';
        echo '<div></div>';
        break;
    case 'roheline':
        echo '<div></div>';
        echo '<div></div>';
        echo '<div style="background: green;"></div>';
        break;
    default:

        echo '<div style="background: black;"></div>';
        echo '<div style="background: black;"></div>';
        echo '<div style="background: black;"></div>';

}


