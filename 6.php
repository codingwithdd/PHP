<?php

//--------------------if...else...elseif Statements-------------
        /*
        1. if
        2. if_else
        3. if.. elseif ..else
        4. Switch
        */

        //------if --------------
            $x=date("H");
            if($x<"20"){
                echo "Have a great Day";
            }
        //-------if...else----------
            echo "<br>";
            if($x<"20"){
                echo "Have a great day!";
            }else{
                echo "Have a great night";
            }
        //--------if..elseif...else----------
            echo "<br>";
            if($x<"10"){
                echo "Have a great morning";
            }
            elseif( $x<20){
                echo "Have a great day";
            }else {
                echo "Have a great night";
            }

//----------------------switch Statement-----------------------
    echo "<br>";
    $fav_bike="Duke";
    switch($fav_bike){
        case "Yamaha":
            echo " Your favourate bike is Yamaha";
            break;
        case "Bajaj":
            echo " Your favourate bike is Bajaj";
            break;
        case "Duke":
            echo "Your favourate bike is Duke";
            break;
        default:
            echo "Your favourate is unknown";
            break;

    }

//---------------------Loops-----------------------
        /*
        1. while
        2. do while
        3. for
        4. foreach
        */

        //------------while -----------------
            echo "<br>";
            $x=3;
            while($x<=5){
                echo "This nuber is $x. <br>";
                $x++;
            }
        //----------do while -------------
            do{
                echo " the number is $x <br>";
                $x++;
            }while($x<=10);
        //----------for-------------------
            echo "<br>";
            for($x=0;$x<=100;$x+=10){
                echo "The number is $x <br>";
            }
        //-----------foreach Loop-----------
            echo "<br>";
            $phones=array("iphone","samsung","realme","ark","vivo","mi");

            foreach ($phones as $value){
                echo "$value <br>";
            }


        

?>