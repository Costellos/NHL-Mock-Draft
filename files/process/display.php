<?php
include 'config/db.php';
mysql_select_db($databaseName,$con);
$result=mysql_query("select * from players",$con);
while($data = mysql_fetch_row($result)){
    $id =  $data[0];
    $name =  $data[1];
    $pic =  $data[2];
    $team =  $data[3];
    $league =  $data[4];
    $finalrank =  $data[5];
    $middelrank =  $data[6];
    $pos =  $data[7];
    $height =  $data[8];
    $born =  $data[9];
    $bornin =  $data[10];
    $shoots =  $data[11];
    $weight =  $data[12];
    $hometown =  $data[13];

include('player_divs.php');

}
$con->close();
?>