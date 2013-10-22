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
        require_once 'connect.php';
        $rs = mysql_query("select * from news WHERE ID=" . $_GET["id"]);
        while ($zaznam = mysql_fetch_assoc($rs))
            if ($_SESSION['login'] != "") {
                echo '<h1>Úprava/Přidání článku</h1>  <a href=seznamclanku.php>Zpět na seznam příspěvků</a><br>
                        <form action = "uprav.php" method="POST" >
                <input class=textbox class="hover" style="width:500px" id="Nadpis" name="nadpis" placeholder="Nadpis" value="' . $zaznam[nadpis] . '" type="text" required/><br>
				<input type="hidden" name="idcko" value=' . $_GET["id"] . '>

                <textarea name="editor1">
                ' . $zaznam[text] . '
                </textarea>
                <script>
                CKEDITOR.replace("editor1");
                </script>


                          <input style="float:right; margin-left:right; margin-top:10px" id=icon-ok class = submit id = "input" type = "submit" value = "Uložit" />

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