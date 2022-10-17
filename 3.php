<?php
Echo " I am Dipesh Pandit ................";

$color="red";
echo " the color is ".$color ."<br>";
echo " the color is ". $Color ."<br>"; // since mention variable is not listed so display notice or error
//-------------comments-----------------

    # -is also used as single line comment
    /*
    - this is used as multiple-line comment 
    */

//------------ Variable--------------
        # we have to use ($)operator followed by name for defining variable
            $name="Dipesh Pandit";
            $age=20;
            echo "Name is $name and age is $age <br>";
            echo $age;

//-----------PHP Variables Scope---------
        #PHP has three different variable scopes:
        /*
        local
        global
        static
        */
    // use of global variable
           $x=5;//global scope
           
           function  test1(){
            echo "<p> variable  inside fun is $x</p>";}
           test1();
           echo "<p> variable x outside function is $x</p>";
    // use of local variable
            function test2(){
                $y=6;
                echo "<p> value is $y</p>";
            }
            test2();
            echo "<p> value is $y</p>";
    
    // use global varibale inside function
            function test3(){
                global $x;// we can alo use with array as dollarGLOBALS['x]
                echo "<p> value is $x";
            }
            test3();
    // use statics keyword
            // when a function is completed/executed, all of local varibale variables are deleted. so use it for further job we use statics keyword.
            function test4(){
                static $z=1 ;
                echo "<br>$z <br>";
                $z++;
            }
            test4();
            test4();

//-------------php echo and print Statements----------------
        //########--- echo-------- ############
            // there are basically two ways to display one is with echo and other is with print
            // the things that makes it different is that echo has no return value and other has return value 1
            echo "<h2> Day_3 something special</h2>";
            echo "i ","did ","small ","photography ";
            echo "<br>".$x."</br>";
        //########--- print-------- ############
            print "<h2>We are going for swimming</h2>";
            print "hello well wisher";

//------------ php data types------------------------
            /*
            1. String
            2. Interger
            3. Float
            4. Boolean
            5. Array
            6. Object
            7. Null
            8. Resource   */
    //-----string--------
            $xx="<br>hello world</br>";
            echo $xx;
    // ----integer-------
            // var_dump() - denote the datatype
                $xxx=15;
                var_dump($xxx);
    //-----float-------
            $xxxx=15.15;
            echo "<br>$xxxx</br>";
            echo var_dump($xxxx);
    //---- Boolean-----
            //it return true or false
    //---- Array-------
            $cars= array("Volvo","BWM","Toyoto");
            var_dump($cars);
    //----Object-------
        class Car{
                public $color;
                public $model;
                public function _construct($color,$model){
                        $this->color =$color;
                        $this->model=$model;
                }
                public function message(){
                        return "My car is a".$this->color." ".$this->model."!<br>";
                
                }
        }
        $ccar= new Car("black","Volvo");
        echo $ccar -> message();//showing error ---------------------------
     //-------Null value -----------
                $yy=null;
                var_dump($yy);
    //-------Resource--------------
                // we will learn in comming lessons

?>