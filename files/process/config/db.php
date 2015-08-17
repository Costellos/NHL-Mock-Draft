<?php 
  $host = "localhost";
  $user = "root";
  $pass = "20vision10";
  //$user = "nightma7";
  //$pass = "Jiggyfly1~";
  $databaseName = "nightma7_nhl_mock_draft";

// SQL server connection information
$sql_details = array(
    'user' => $user,
    'pass' => $pass,
    'db'   => $databaseName,
    'host' => $host
);

?>
<?php 
$con=mysql_connect($host,$user,$pass);  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
?>