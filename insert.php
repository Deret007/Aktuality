<?php
require_once 'connect.php';

$sql = "INSERT INTO news (
ID,
nadpis,
text,
datum)
VALUES
(NULL,
'$_POST[nadpis]',
'$_POST[editor1]',
now())";
if(mysql_query($sql)){
    echo 'Aktualita přidána';
echo '<script> window.location.replace("index.php");</script>;';
}else{
    echo mysql_error();
}
?>