<?php



session_start();
if (!$_SESSION['login'])
    die("neopravneny pristup");
    
    
require_once 'connect.php';
$sql = "UPDATE news SET nadpis='".$_POST[nadpis]."', text='".$_POST[editor1]."' WHERE ID=".$_POST[idcko];

$vypis = mysql_query($sql) or die(mysql_error());
header("Location: seznamclanku.php");
?>
