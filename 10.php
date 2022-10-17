<?php

//-------------------------Regular Expressions Functions------------------
        //----------preg_match()------------
            $str="Visit Hamroopportunity";
            $pattern="/hamroopportunity/i";
            echo preg_match($pattern,$str);
        
        //----------preg_match_all()----------
            $str_1="he rain in SPAIN falls mainly on the plains.";
            $pattern_1="/ain/i";
            echo "<br>";
            echo preg_match_all($pattern_1,$str_1);
        //----------preg_replace()-------------
            $str_2="Visit Microsoft";
            $pattern_2="/microsoft/i";
            echo "<br>";
            echo preg_replace($pattern_2,"Hamroopportunity",$str_2);
        //----------Grouping-------------
            $str_3 = "Apples and bananas.";
            $pattern_3 = "/ba(na){2}/i";
            echo "<br>";
            echo preg_match($pattern_3, $str_3);
        
            

?>