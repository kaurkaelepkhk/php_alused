<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 13.12.2018
 * Time: 13:08
 */

// muutujate defineerimine
// $muutujaNimi = väärtus;

$taisArv = 3;
$reaalArv = 3.3;
$sone = '3';
$toevaartusTrue = true;
$toevaartusFalse = false;

// väljastame muutujad koos selgitusega
echo 'Täisarv '.$taisArv.'<br>';
echo 'Reaalarv '.$reaalArv.'<br>';
echo 'Sõne '.$sone.' <br>';
echo 'Tõeväärtus '.$toevaartusTrue.'<br>';
echo 'Tõeväärtus '.$toevaartusFalse.'<br>';
echo '<hr>';

// tüübikontroll
echo gettype($sone);
echo "<br>";
$summa = $sone + $sone;
//settype($summa, 'string');
echo gettype($summa);
echo 'Summa = '.$summa.'<br>';

// matemaatilised ja võrdlusoperaatorid
$arv1 = 42;
$arv2 = 11;

echo $arv1.' + '.$arv2.' = '.($arv1 + $arv2).'<br>';
echo $arv1.' - '.$arv2.' = '.($arv1 - $arv2).'<br>';
echo $arv1.' * '.$arv2.' = '.($arv1 * $arv2).'<br>';
echo $arv1.' / '.$arv2.' = '.($arv1 / $arv2).'<br>';
echo $arv1.' % '.$arv2.' = '.($arv1 % $arv2).'<br>';

echo '<hr>';

echo $arv1.' == '.$arv2.' on '.($arv1 == $arv2).'<br>';
echo $arv1.' != '.$arv2.' on '.($arv1 != $arv2).'<br>';
echo $arv1.' <= '.$arv2.' on '.($arv1 <= $arv2).'<br>';
echo $arv1.' >= '.$arv2.' on '.($arv1 >= $arv2).'<br>';
echo $arv1.' < '.$arv2.' on '.($arv1 < $arv2).'<br>';
echo $arv1.' > '.$arv2.' on '.($arv1 > $arv2).'<br>';