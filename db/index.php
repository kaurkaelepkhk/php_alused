<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 24.01.2019
 * Time: 12:17
 */



require_once('db_fnk.php');
require_once('conf.php');

$iktConn = connect_db(DBHOST,DBUSER,DBPASS,DBNAME);
// UPDATE DATA
$sql = 'UPDATE user SET last_name = "Ebatavaline" WHERE user_id = 1';
$res = query($sql, $iktConn);

// SELECT SQL

$sql = 'SELECT * FROM user';
$res = getData($sql, $iktConn);

echo '<pre>';
print_r($res);

echo 'Tere, '.$res[0]['first_name'].' '.$res[0]['last_name'].'<br>';
