<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 18.12.2018
 * Time: 14:42
 */

// Andmemasiivi loomine
/*$kasutajad = array(
    'Mike',
    'Diane',
    'Superman',
    'HenryTheThird',
);*/

//Väljastamine foriga
/*for ($i = 0; $i < count($kasutajad); $i++) {
    echo $i.' - '.$kasutajad[$i].'<br>';
}*/

//Väljastamine forEachiga
/*foreach($kasutajad as $kasutaja) {
    echo $kasutaja.'<br>';
}
//Massiivi andmete sisestamine

$kasutajad = array();

$kasutajad[] = 'Mike';
$kasutajad[] = 'Superman';
array_push($kasutajad, 'Diane');

// Massiivi andmete eemaldamine

// tagantpoolt

array_pop($kasutajad);

// eestpoolt

array_shift($kasutajad);

// array sisu checkimine

print_r
var_dump
*/

//mitu massiivi ühes variables
/*$kasutajad = array(
    array (
    'Bob',
    'Sob',
    'Hog',
    'female'
), array(
    'Salmon',
    'Tortoise',
    'Clown',
    'male',
    )
);

echo '<hr>';
foreach ($kasutajad as $kasutaja) {
    for ($i = 0; $i < count($kasutaja); $i++) {
        if($kasutaja[3] == 'female') {
            echo '<div style="color: red;">';
        } else {
            echo '<div style="color: blue;">';
        }
        echo $kasutaja[$i].'</div>';
    }
    echo '<hr>';
}*/

