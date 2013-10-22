<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aktuality</title>
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <h1>Seznam článků</h1><br>

        <div class=clankyseznam>


            <?php
            require_once 'connect.php';
            if ($_SESSION['login'] != "") {
                echo '<div class=prispevek style="height: 50px;"><div class=edit><a href=edit.php><input id=icon-plus type=button class=submit id="input"  value="Přidat článek"></a></div></div>';
                $rs = mysql_query("select * from news ORDER BY ID DESC");
                while ($zaznam = mysql_fetch_assoc($rs)) {
                    echo "
                     <div class=prispevek><div class=nadpis>$zaznam[nadpis]</div><form metod='POST'><input  id=icon-trash type=button class=submit type=button onClick='smaz($zaznam[ID]);' value=Smaž><input  id=icon-edit type=button class=submit type=button onClick='edit($zaznam[ID])' value=Uprav></form></div>
                ";
                }
            } else {
                echo 'Tato stránka se vám zobrazí až po přihlášení. <a href="prihlaseni.php">Přihlasit</a>';
            }
            ?>
            <?php
            if ($_SESSION['login'] != "") {
                echo '<strong>Nacházíš se v administraci!</strong> <a href="logout.php">Odhlásit</a>';
            };
            ?>
            <script>
                function smaz(id) {
                    window.location = "delete.php?id="+id;
                }
                function edit(id) {
                    window.location = "add.php?id="+id;
                }
            </script>
        </div>
        <p>Copyright &copy; 2013 David Tereba <a style="color:grey" href="prihlaseni.php">Administrace</a></p>

    </body>
</html>
