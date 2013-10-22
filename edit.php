<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aktuality</title>
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen">
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <?php
        if ($_SESSION['login'] != "") {
            echo '<h1>Úprava/Přidání článku</h1>  <a href=seznamclanku.php>Zpět na seznam příspěvků</a><br>
                        <form action = "insert.php" method = "post" >
                <input class=textbox class="hover" style="width:498px; margin-top:10px; margin-bottom:0px;" id="Nadpis" name = "nadpis" placeholder = " Nadpis" type = "text" required/><br>


                <textarea name = "editor1">
                </textarea>
                <script>
                CKEDITOR.replace("editor1");
                </script>


                    <input style="float:right; margin-left:right; margin-top:10px" id=icon-ok class = submit id = "input" type = "submit" value = "Přidat" />

                </form>
                   <div style="width:500px; margin-top:80px">
                <strong>Nacházíš se v administraci!</strong> <a href="logout.php">Odhlásit</a></div>';
        } else {
            echo 'Tato stránka se vám zobrazí až po přihlášení. <a href="prihlaseni.php">Přihlasit</a>';
        }
        ?>
        <p>Copyright &copy; 2013 David Tereba <a style="color:grey" href="prihlaseni.php">Administrace</a></p>

    </body>
</html>