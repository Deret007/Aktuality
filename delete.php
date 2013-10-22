<?php
session_start();
if(!$_SESSION['login'])
  die("neopravneny pristup");

require_once 'connect.php';

$del = "DELETE FROM news
WHERE ID =".$_GET["id"];
        
$ret = mysql_query($del);
//echo mysql_error();

header("Location: seznamclanku.php");


?>
