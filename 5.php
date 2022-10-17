<?php

//----------------------Operators-----------------------
        /*
        Arithmetic operators
        Assignment operators
        Comparison operators
        Increment/Decrement operators
        Logical operators
        String operators
        Array operators
        Conditional assignment operators
        */
        
        //--------Arithmetic operators--------
        $x=5;
        $y=6;
        echo $x +$y; //result => 11
        echo "<br>";
        echo  $x ** $y;  // result =>15625
        
        //--------Assignment Operators---------
        echo "<br>";
        echo $x+=$y; // result => 11

        //-------- Comparison Operators--------
        echo "<br>";
        echo var_dump($x==$y);  // result => bool(false)

        //--------Increment / Decrement Operators------
        echo "<br>";
        echo ++$x;    // result => 12
        echo "<br>";
        echo $y++;     // result =>6

        //---------Logical Operators-------------
        echo "<br>";
        $x=2;
        $y=3;
        if($x==2 and $y==3){
            echo "Correct";  
        }                       // result => Correct

        //------String Operators------------
        echo "<br>";
        $first_name="Dipesh ";
        $last_name="Pandit";
        echo $first_name.$last_name; // result => Dipesh Pandit

        //----- Array Operators--------------
        echo "<br>";
        $x = array("a" => "red", "b" => "green");  
        $y = array("c" => "blue", "d" => "yellow");  
        print_r($x + $y);           // result => Array ( [a] => red [b] => green [c] => blue [d] => yellow )

        //-------Conditional Assignment Operators-------

        

?>
 
