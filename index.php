<html>
    <head>  
        <style>
            div{
                background-color: green;
                width: 400px;
                border-style: solid;
                border-color: gray;
                border-width: 2px;
            }
            input{
                width: 400px;
                height: 30px;
                border-style: solid;
                border-color: gray;
            }
            
            button{
                
                background-color: #4CAF50; /* Green */
                width: 100px;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            form{
                
            }
            
        </style>
    </head>
    <body>
        
        <div>
            <form>
                <input text="" >
                 <?php
        $toetsen = array(array("C","/","X","BS"),
                    array("7","8","9","-"),
                    array("4","5","6","+"),
                    array("1","2","3","()"),
                    array("0",".","%","="));
        for ($x = 0; $x < 5; $x++) {
            echo "<br>";
            for ($y = 0; $y < 4; $y++) {


                echo "<button>".$toetsen[$x][$y]."</button>";
            }
        }
        
        
        ?>
                
            </form>
            
        </div>
       





    </body>   
</html>