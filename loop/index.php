<?php
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
        width: 300px;
        height: 30px;
        border: solid 1px black;
        border-collapse: collapse;
    }
    td {
        text-align: center;
    }
</style>

<?php

/*echo '<h5>Ülesanne 2</h5>';
echo '<table>';
    for($reaNumber = 1; $reaNumber <= 11; $reaNumber++) {
        echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= 11; $veeruNumber++) {
            $varv = '#';
            for($kord = 1; $kord <= 6; $kord++) {
                $varv = $varv.rand(0, 10);
            }
            echo '<td style="background: '.$varv.'">&nbsp;</td>';
        }
        echo '</tr>';
    }
echo '</table>';*/

echo '<h5> Ülesanne 3</h5>';
echo '<table>';
    echo '<tr>';
    for ($rnr = 0; $rnr <= 10; $rnr++) {
        $txt = ($rnr == 0) ? '&nbsp;' : $rnr;
        echo '<th>'.$rnr.'</th>';
    }
    echo '</tr>';
    for ($rnr = 1; $rnr <= 10; $rnr++) {
        echo'<tr>';
            echo '<th>'.$rnr.'</th>';
            for ($vnr = 1; $vnr <= 10; $vnr++) {
                echo '<td>';
                echo ($rnr * $vnr);
                echo '</td>';
            }
        echo'</tr>';
    }
echo '</table>';