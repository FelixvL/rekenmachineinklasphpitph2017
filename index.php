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
                if (m =='23'){
                    doPlusSign();
                }
                if(m=='43'){
                    doEqualsSign();
                }
//                var N1 = document .getElementById(idinpu));
//                var N2 = document .getElementById(idinput);
            }
            function doPlusSign(){
                var numberOnDisplay = document.getElementById('idinput').value;
                console.log(numberOnDisplay);
                document.getElementById('tempStorePlus').value = numberOnDisplay.substring(0, --numberOnDisplay.length);
                clearDisplay();
            }
            function clearDisplay(){
                document.getElementById('idinput').value = "";
            }
            function doEqualsSign(){
                var numberOnDisplay = document.getElementById('idinput').value;
                numberOnDisplay = numberOnDisplay.substring(0, --numberOnDisplay.length);
                var previousNumber = document.getElementById('tempStorePlus').value;
                clearDisplay();
                document.getElementById('idinput').value = (parseInt(numberOnDisplay) + parseInt(previousNumber));
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
                //echo "\n";
                echo '<button id=idbutton'.$id.' onclick="Insert(\''.$id.'\')">'.$toetsen[$x][$y].'</button>';
            }
        }
        
        
        ?>
                
            
        </div>
       <input type="text" id="tempStorePlus">





    </body>   
</html>