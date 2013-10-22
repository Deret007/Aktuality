<?
$db_server    = 'localhost'; // Server na kterém běží DB
$db_login     = 'cztestnito'; // Login do DB
$db_password  = 'r4kosn1cek'; // Heslo do DB
$db_name      = 'cztestnito'; // Jméno DB
$spojeni      = @MySQL_Connect($db_server ,$db_login, $db_password);
@MySQL_Select_DB($db_name)or die('<p style="color: #CC0000">Nastala chyba v pripojeni k databazi');
mysql_query("set names utf8");
?>
