<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 14.12.2018
 * Time: 13:58
 */

/*
 *  while(tingimus) {
 *      tegevused, mis toimuvad nii kaua kui kehtib
 * }
 *
 */

//$arv = 1234;
//while($arv != 0) {
//    $number = $arv % 10;
//    echo 'Number = '.$number.'</br>';
//    $arv = $arv / 10;
//    echo 'Arv ümardamata = '.$arv.'<br>';
//    settype($arv, 'int');
//    echo 'Arv ümardatult = '.$arv.'</br>';
////    $summa = $summa + $number;
//    $summa += $number;
//    echo '<hr>';
//}
//echo 'Arvu numbrite summa = ' .$summa.'</br>';

$arv = 3456789432134567890234567890;
$kordamine = 0;
while($arv != 0) {
    $number = $arv % 10;
    echo 'Number = '.$number.'</br>';
    $arv = $arv / 10;
    echo 'Arv ümardamata = '.$arv.'<br>';
    settype($arv, 'int');
    echo 'Arv ümardatult = '.$arv.'</br>';
//    $summa = $summa + $number;
    if($number == 5) $kordamine++;
    echo '<hr>';
    $summa += $number;
}
echo 'Number 5 esineb '.$kordamine.' korda<br>';
// for
/*
 * for($jmn = alg; $jmn <= lopp; $jmn++) {
 *      tegevused, mis toimuvad nii kaua kui jmn väärtus ei ole enam tõene
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