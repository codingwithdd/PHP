<?php   declare(strict_types=1);
//------------------- Function----------------------

        function family_name($fname){
            echo "$fname <br>";
        }

        family_name("Dipesh");
        /*
        function addNumbers(int $a, int $b){
            return $a + $b;
        }
        echo addNumbers(5,"5 days"); //result => 10 because php is loosely typed language which convert 5 days into numeric and make sum to 10.

        function addNumber(int $a, int $b){
            return $a + $b;
        }
        echo addNumber(5,"5 days"); // result => it displayed an error because we have seclare  strict_types at vvery first of our program.
        */
    //-----------Default Argument Value--------------
        function set_hour(int $hour=3){
            echo "<br>";
            echo " The hour we have set is: $hour<br>";
        }
        set_hour(8);     //result =>8
        set_hour();     //result =>3

    //----------- Returning values--------------
        function sum(int $x,int $y){
            echo "<br>";
            $z=$x+$y;
            return $z;
        }
        echo sum(3,6);

    //-----------Return Type Declarations----------
        function sub(int $x,int $y):int{ // by using : int or float we are defining what type of return value we are declaring
            echo "<br>";
            $z=$x-$y;
            return $z;
        }
        echo sub(3,6);
        echo "<br>";
    
    //-------Passing Arguments by Reference--------------
        function add_1(&$value) {
            $value += 5;
        }
        
        $num = 6;
        add_1($num); //sesult=> when we use & we get result 11 while while neglating we get 6
        echo $num; 
            
        

?>