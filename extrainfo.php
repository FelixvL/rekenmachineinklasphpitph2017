<html>
    <head>
        <script>
            function letsgo(){
                var nu = Date.now();
            //    alert(nu);
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                console.log(h);
                console.log(m);
                console.log(s);
                document.getElementById('timeDiv').innerHTML = h+":"+m+","+s;
            }
        
        </script>
        
    </head>
    <body onload="letsgo()">
        <div id="timeDiv"></div>
        
<?php   
///////////Werken met tijd -> Bas

echo $datum = time();
echo "<br>";
echo $timePassed = time() - 1509544565;
echo date('l jS \of F Y h:i:s A', time());
echo "<br>";
echo date('l', time());
// 1 jan 1970
echo "<br>";
echo (((($datum / 60)/60)/24)/365.25);

?>
        
    </body>



    </html>
