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
        <?php
        if ($_SESSION['login'] != "") {
            header("Location: seznamclanku.php");
        } else {
            echo '<h1>Přihlášení</h1><br>
                <form action="login.php" method="POST" >

                    <input class=textbox  name="nick" placeholder="Jméno" type="text" required/><br>

                    <input class=textbox  name="heslo" placeholder="Heslo" type="password" required/><br>


                    <input id=icon-lock class=submit id="input"  type="submit" value="Přihlásit se" />

                </form>';
        }
        ?>
        <p>Copyright &copy; 2013 David Tereba <a style="color:grey" href="prihlaseni.php">Administrace</a></p>

    </body>
</html>

