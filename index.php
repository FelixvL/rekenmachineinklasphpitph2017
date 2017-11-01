<html>
    <head>  
        
        <script> 
            
            function Insert(m)
            
            {
               console.log (m);
               
             var x= document.getElementById("idbutton"+m).innerHTML;
             var p= document.getElementById("idinput").value;
             document.getElementById("idinput").value=p+x;
             
             if(m=='00'){
                 
                     document.getElementById("idinput").value = "";
                }
                if(m=='03'){
                    var currentText = document.getElementById("idinput").value;
                    alert(currentText);
                    var g = currentText.length;
                    g=g-3;
                    var h = currentText.substring (0,g);
                    document.getElementById("idinput").value=h;
        }
        
                
            }
            
         </script>
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
                <input type=text id="idinput">
                 <?php
        $toetsen = array(array("C","/","X","BS"),
                    array("7","8","9","-"),
                    array("4","5","6","+"),
                    array("1","2","3","()"),
                    array("0",".","%","="));
        
        
        for ($x = 0; $x < 5; $x++) {
             echo "<br>";
            for ($y = 0; $y < 4; $y++) {

                //$id= "$x.$y";      //    "1.2"
                $id= $x."".$y;      //    "12"
                echo "\n";
                echo '<button id=idbutton'.$id.' onclick="Insert(\''.$id.'\')">'.$toetsen[$x][$y].'</button>';
            }
        }
        
        
        ?>
                
            
        </div>
       





    </body>   
</html>