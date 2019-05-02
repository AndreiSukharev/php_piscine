#!/usr/bin/php
<?php

    while (1){
        if (feof(STDIN)){
            echo("\n");
            exit();
        }
        echo "Enter a number: ";
        $arg = trim(fgets(STDIN));
        if (is_numeric($arg))
        {
            $arg = (int)$arg;
            if ($arg % 2 == 0){
                        echo "The number $arg is even\n";
            }
            else {
                echo "The number $arg is odd\n";
            }
        }
        else {
            echo "'$arg' is not a number\n";
	}

}
?>
