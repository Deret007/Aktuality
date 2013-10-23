<?
$db_server    = ''; // Server na kterém běží DB
$db_login     = ''; // Login do DB
$db_password  = ''; // Heslo do DB
$db_name      = ''; // Jméno DB
$spojeni      = @MySQL_Connect($db_server ,$db_login, $db_password);
@MySQL_Select_DB($db_name)or die('<p style="color: #CC0000">Nastala chyba v pripojeni k databazi');
mysql_query("set names utf8");
?>
