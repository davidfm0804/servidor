<?php
$i=3;
$num=16;
include 'funcion_factorial.php'
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/factorial.css">
        <title>Factorial del 1 al 10</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Numero</th>
                <th>Factorial</th>  
            </tr>
        <?php
           factorial($i,$num);
        ?>
        </table>
    </body>
</html> 