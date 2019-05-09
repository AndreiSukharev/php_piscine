<?php

Class Tyrion extends Lannister {

    function sleepWith($who)
    {
        if (get_class($who) == "Sansa")
            print("Let's do this.\n");
        else
            print("Not even if I'm drunk !\n");
    }

}