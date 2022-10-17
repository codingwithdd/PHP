<?php

//------------------------Global Variables - Superglobals-------------------------
        /*
        $GLOBALS
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        $_FILES
        $_ENV
        $_COOKIE
        $_SESSION
        */

        //------------$GLOBALS-------------
            $x=25;
            $y=75;

            function add(){
                $GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
            }
            add();
            echo $z;        //result => 100
        
        //-----------$_SERVER-------------
            echo "<br>";   
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['SERVER_ADDR'];
        //---------$_REQUEST-------------
        //---------$_POST---------------
        //---------$_GET-----------------
            
?>