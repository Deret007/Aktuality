<!DOCTYPE html>
<html>
    <head>
        <title>Aktuality</title>
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <h1>Aktuality</h1>
        <div id="novinky">
            <!--Výpis aktualit z databáze od nejnovější-->
            <?php
            require_once 'connect.php';
            $rs = mysql_query("select * from news ORDER BY ID DESC");
            while ($zaznam = mysql_fetch_assoc($rs)) {
                echo "<div class='nov'><div class='plus'>+</div><div class='minus'>-</div><div class='datum'>" . date("j.n.Y", strtotime($zaznam[datum])) . "</div>$zaznam[nadpis]</div>
                    <div class='detail'>$zaznam[text]</div>";
            }
            ?>
            <script>
                var plus = document.querySelectorAll(".plus");
                var minus = document.querySelectorAll(".minus");
                var detail = document.querySelectorAll(".detail");
                
                for(var i = 0;i < plus.length;i++) {
                    (function(i) {
                        plus[i].onclick = function() {
                            detail[i].style.display = "block";
                            plus[i].style.display = "none";
                            minus[i].style.display = "block";
                        }; 
                        minus[i].onclick = function() {
                            detail[i].style.display = "none";
                            plus[i].style.display = "block";
                            minus[i].style.display = "none";
                        };
                    })(i);
                }    
            </script>
        </div>
        <p>Copyright &copy; 2013 David Tereba <a style="color:grey" href="prihlaseni.php">Administrace</a></p>

    </body>
</html>
