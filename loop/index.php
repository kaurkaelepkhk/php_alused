<?php
header('refresh: 0.1')
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 14.12.2018
 * Time: 13:58
 */

/*
 * for($jmn = alg; $jmn <= lopp; $jmn++) {
 *      tegevused, mis toimuvad nii kaua kui jmn väärtus ei ole enam tõenem
 * }
 */

/*echo '<h5>Ülesanne 1</h5>';
for ($arv = 1; $arv <= 10; $arv++) {
    if($arv % 2 == 0) {
        $varv = 'green';
    } else {
        $varv = 'red';
    }
    // teine võimalus, sama asi
    // $varv = ($arv % 2 == 0) ? 'green' : 'red';
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
}*/

?>

<style>
    table, tr, td {
        width: 1900px;
        height: 200px;
        border: solid 1px black;
        border-collapse: collapse;
    }
</style>

<?php

echo '<h5>Ülesanne 2</h5>';
echo '<table>';
    for($reaNumber = 1; $reaNumber <= 5; $reaNumber++) {
        echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= 5; $veeruNumber++) {
            $varv = '#';
            for($kord = 1; $kord <= 6; $kord++) {
                $varv = $varv.dechex(rand(0, 15));
            }
            echo '<td style="background: '.$varv.'">&nbsp;</td>';
        }
        echo '</tr>';
    }
echo '</table>';