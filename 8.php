<?php 
//---------------------- Array----------------------
    //----- Get The Length of an Array - The count() Function--------
        echo "<br>";
        // echo count($cars);
    //------Indexed Arrays--------------
        $cars=array("Farari","Mahendra","Sujuki","Tesla","Neta");
        echo " I like electric car named. $cars[4]. but $cars[3] is my favourate";
    //-----Loop Through an Indexed Array--------
       $arrlen=count($cars);
       for($x=0;$x<=2;$x++){
        echo $cars[$x];
        echo "<br>";
       }
    //------ Associative Arrays----------
        // it use named keys that we assign to them.
       $age=array("Dipesh"=>"20","Diwas"=>"15","Samip"=>"18");
       echo "Dipesh is" . $age['Dipesh'] ."years old<br>";
    //------Loop Through an Associative Array------------
       foreach($age as $x=>$x_value){
        echo "Key is ".$x.", Value is".$x_value."<br>";
       }
    //----------Multidimensional Arrays--------------------------
            //--------Two-dimensional Arrays--------
                     $car=array(array("Tesla",23,43),array("Neta",43,65));
                     for ($row = 0; $row < 4; $row++) {
                        echo "<p><b>Row number $row</b></p>";
                        echo "<ul>";
                        for ($col = 0; $col < 3; $col++) {
                          echo "<li>".$car[$row][$col]."</li>";
                        }
                        echo "</ul>";
                      }
    //-------Sort Array in Ascending Order - sort()------
        sort($cars);
        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
        }
    //-------Sort Array in Descending Order - rsort()--------
        echo "<br>";
        rsort($cars);
        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
        }
    //------Sort Array (Ascending Order), According to Value - asort()-----
        asort($age);
        foreach($age as $x=>$x_value){
            echo "Key is ".$x.", Value is".$x_value."<br>";
           }
    //----Sort Array (Ascending Order), According to Key - ksort()---------
        echo "<br>";
        ksort($age);
        foreach($age as $x=>$x_value){
            echo "Key is ".$x.", Value is".$x_value."<br>";
           }
    //-------Sort Array (Descending Order), According to Value - arsort()-----
        echo "<br>";
        arsort($age);
        foreach($age as $x=>$x_value){
            echo "Key is ".$x.", Value is".$x_value."<br>";
           }
           
        


    

?>