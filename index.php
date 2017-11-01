<html>
    <head>  

    </head>
    <body>
        <?php
        $toetsen = array(array("C","/","X","BS"),
                    array("7","8","9","-"),
                    array("4","5","6","+"),
                    array("1","2","3","()"),
                    array("0",".","%","="));
        for ($x = 0; $x < 6; $x++) {
            echo "<br>";
            for ($y = 0; $y < 5; $y++) {


                echo "<button>$toetsen[$x][$y]</button>";
            }
        }
        
        
        ?>





    </body>   
</html>