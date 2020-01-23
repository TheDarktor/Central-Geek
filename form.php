<html>
    <head>
        <title>formPHP</title>
        <meta charset="utf-8">
    </head>
    
    <body>

<?php

$Vnome=$_GET["nome"];
$Vtelefone=$_GET["telefone"];
$Vemail=$_GET["email"];
$Vsenha=$_GET["senha"];

        echo "<font color=#000000>";
        echo "O nome do usúario é: "."<font color=#ff0000>".$Vnome."</font>";
        echo "<br>";
        
        echo "<font color=#000000>";
        echo "O telefone do usúario é: "."<font color=#ff0000>".$Vtelefone."</font>";
        echo "<br>";
        
        echo "<font color=#000000>";
        echo "O email do usúario é: "."<font color=#ff0000>".$Vemail."</font>";
        echo "<br>";
        
        echo "<font color=#000000>";
        echo "A senha do usúario é: "."<font color=#ff0000>".$Vsenha."</font>";
        echo "<br>";


?>
        
    </body>
    
</html>
