<?php
echo "<center><h1>Hello World</h1></center>";

//--------------------String---------------------
    //----strlen()-------reurn the length of a string
            echo strlen("Hello World"); // result => 11
    //----str_word_count()---Count words in a String
            echo str_word_count("We are in Nijgadh"); // result => 4
    //----strrev()-----Reverse a string
            echo strrev("Hello world");  // result =>dlrow olleH
    //----strpos()----- Search for a text within a string
            echo strpos("Dipesh Pandit","Pandit"); // result => 7
    //----str_replace()-----Replace text within a string
            echo str_replace("are","am","I are doing photography challenge"); //result => I am doing photography challenge

//------------------ Numbers---------------------
    //-----integer---------
        $x=555;
        echo "<br>";
        var_dump(is_int($x)); // result => bool(true)
    //---- float ----------
        $y=12.55;
        echo "<br>";
        var_dump(is_float($y)); // result => bool(true)
    //----- infinity--------
        $z=1.9e411;
        echo "<br>";
        var_dump(is_infinite($z));
    //------ NaN---------//NaN is used for impossible mathematical operations
        $a = acos(8);
        echo "<br>";
        var_dump($a); // result =>float(NAN)
    //------ Numerical Strings-------
        $b=234;
        var_dump(is_numeric($b)); // result=> bool(true)
        $b="234";
        var_dump(is_numeric($b)); // result=> bool(true)
        $b=234+"12";
        var_dump(is_numeric($b)); // result=> bool(true)
        $b="dipesh";
        var_dump(is_numeric($b)); // result=> bool(false)
    //------ Casting String and Floats to integer
        // float to int
            $c=23.54;
            $d=(int)$c;
            echo $d;   // result =>23
        // string to int
            $c="22.54";
            $d=(int)$c;
            echo $d;  // result => 22

//-----------------Math---------------------------------

        // Note: all math function are inside small bracket
        //-----pi() Function-----------------
            echo "<br>";
            echo (pi());
        //-----min() and max() Functions------
            echo "<br>";
            echo (min(0,150,30,-6,-200));  // result => -200
            echo "<br>";
            echo (max(0,45,73,-67,23)); //result => 73
        //-----abs() Function-------
            echo "<br>";
            echo (abs(-34));    // result => 34
        //-----sqrt() Function------
            echo "<br>";
            echo (sqrt(81));    // result =>9
        //-----round() Function------
            echo "<br>";
            echo (round(0.51)); // result => 1
        //---- Random Number---------
            echo "<br>";
            echo (rand()); // result would be any numbers
            echo "<br>";
            echo (rand(30,40)); // where 30 and 40 are min and max numbers

//-------------- Constants-------------------------------------
        // Note: Constants are global across entire script dispite of variables

        //------ Create a php constant--------
                /* Syntax
                    define (name, value, case-insensitive)
                    name: Specifies the name of the constant
                    value: Specifies the value of the constant
                    case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
                */
                echo "<br>";
                define ("WHO","I am Dipesh Pandit."); // this is case sensitive
                echo WHO;        // results => I am Dipesh Pandit
                echo "<br>";
                define ("What","Nothing we are programming",true); // this is case insensitive
                echo What;
        //-------Constant Arrays---------------
                echo "<br>";
                define ("cars",["Alfa Romeo","BMW","Toyoto"]);
                echo cars[1];    // results => BMW
        //-------Constant are global ----------
                echo "<br>";
                define ("When","During Dashain");
                function test1(){
                    echo When;
                }
                test1();


?>