<?php

    if (!(file_exists("welcome.txt")))
    {
        echo "could not open the file";
    }
    
    else
    {
        $text = fopen("welcome.txt","r");
        var_dump($text);
    }
    echo "<br>This program is written by Priyanka Gulati<br>ERPID-0221BCA040";
?>