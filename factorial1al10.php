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
            $num=10;
            $f=[];
            //$j=0;
            for($i=1;$i<=$num;$i++){
                $f[$i]=1;
                for($j=$i;$j>0;$j--){
                    $f[$i]=$f[$i]*$j;
                }
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$f[$i]."</td>";
                echo "<tr>";
            }
        ?>
        </table>
    </body>
</html> 