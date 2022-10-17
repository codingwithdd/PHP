<?php
    //---------------------Open File - fopen()---------------
        $myfile=fopen("18_text.txt","r") or die ("Unable to open file");
        echo fgets($myfile); // fgets reads single line from text
        echo "<br>";
        echo fread($myfile,filesize("18_text.txt")); //The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.
        fclose($myfile);
    //---------------------File Create/Write-------------------
        $myfile=fopen("18_text.txt","w") or die(" Error in opening file");
        $txt="Dipesh\n";
        fwrite($myfile,$txt);
        fclose($myfile);

        //------overwriting------------
        $myfile=fopen("18_text.txt","a") or die(" Error in opening file");
        $txt="pandit\n";
        fwrite($myfile,$txt);
        fclose($myfile);
        
    
?>