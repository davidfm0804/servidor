<html>
    <body>
        <?php
            function factorial($num1,$num){
                $j=0;
                for($i=$num1;$i<=$num;$i++){
                    $f[$i]=1;
                    for($j=$i;$j>0;$j--){
                        $f[$i]=$f[$i]*$j; 
                    }
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$f[$i]."</td>";
                        echo "<tr>";
                }
            }
        ?>
    </body>
</html>