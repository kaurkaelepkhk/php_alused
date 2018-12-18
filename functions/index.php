<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 17.12.2018
 * Time: 14:31
 */

?>

<html lang="en">
<head>
    <title>Listing 6.1</title>
</head>
<body>
<?php
// FUNKTSIOONID
// funktsiooni loomine
/*
function printBR($txt) {
    print ("$txt<br>\n");
}
printBR("This is a line");
printBR("This is a new line");
printBR("This is yet another line");*/
/*function addNums($firstnum, $secondnum; {
    $result = $firstnum + $secondnum )
return $result;11: }
print addNums(3,5);*/
// funktsiooni dünaamilised väljakutsed
/*
function sayHello() {
    print "hello<br>";
}
$function_holder = "sayHello";
$function_holder();*/
// muutujate nähtavuse piirkond
/*function test() {
    $testvariable = "this is a test variable";
}
print "test variable: $testvariable<br>";
// ei väljasta kuna ta ei ole kättesaadav!*/
// muutuja poole pöördumine global instruktsiooni abil
/*$life = 42;
function meaningOfLife() {
    print "The meaning of life is $life<br>";
}
meaningOfLife();
// meaningOfLife() ei saa pöörduda $life poole

// õige meetod

$life = 42;
function meaningOfLife() {
    global $life;
    print "The meaning of life is $life<br>";
}
meaningOfLife();*/
// funktsiooni seisundi meeles pidamine väljakutsete vahel
/*$num_of_calls = 0;
function andAnotherthing($txt) {
    global $num_of_calls;
    $num_of_calls++;
    print "<h1>$num_of_calls. $txt</h1>";
}
andAnotherthing("Widgets");
print ("We build a fine range of widgets<p>");
andAnotherthing("Doodads");
print ("Finest in the world<p>");*/
// ARGUMENDID
// Argumentidele vaikimisi omistatud väärtused
/*function fontWrap ($txt, $size) {
    print "<font size=\"$size\" face=\"Helvetica, Arial, Sans-Serif\">$txt</font>";
}
fontWrap("A heading<br>", 5);
fontWrap("some body text<br>", 3);
fontWrap("some more body text<br>", 3);
fontWrap("yet more body text<br>", 3);*/
// Argumentide andmine viite abil
/*function addFive($num) {
    $num += 5;
}
$orignum = 10;
addFive($orignum);
print($orignum);
*/

function tabel($txt1, $txt2, $txt3, $txt4) {
    echo '<table>';
    echo '<tr>';
    for ($i = 1; $i <= 4; $i++) {
        echo '<td>';
            echo ${'txt'.$i};
        echo '</td>';
        }
    echo '</tr>';
    echo '</table>';
}
tabel('see', 'on', 'üks', 'tabel');

?>
</body>
</html>
