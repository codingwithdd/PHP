<html>
    <head>
        <title>Dipesh Pandit</title>
    </head>
    <body style="font-size=5px">
        <?php
            //---------------------------date()----------------------
                echo "Today's date is ".date("y/m/d")."<br>";
                echo date("l")."<br>";
                ?>
        <h2 style="text-align:center;"> Tip - Automatic Copyright Year<h2>
        © 2020-<?php echo date("Y");?>

        <h2 style="text-align:center;"> Get a Time<h2>    
        <?php echo "The time is ".date("h:i:sa");?>

        <h2 style="text-align:center;"> Get your time zone<h2>    
        <?php date_default_timezone_set("America/New_york"); 
        echo "The time is ".date("h:i:sa");?>
        <br>
        <?php 
        //---------------------Create a Date With mktime()---------------------
            $d=mktime(11,14,32,2,2022);
            echo "Created date is ".date("Y-m-d h:i:sa",$d);
            echo "<br>";
        //-------------------Create a Date From a String With strtotime()----------------
            $d=strtotime("10:30pm June 13 2022");
            echo "Created date and time is ". date("y-m-d h:i:sa",$d)."<br>";
            $d=strtotime("next saturday");
            echo "Created date and time is ". date("y-m-d h:i:sa",$d)."<br>";
        
        ?>
    </body>
</html>