<?php

Class Jaime extends Lannister {

    function sleepWith($who)
    {
        if (get_class($who) == "Cersei")
            print("With pleasure, but only in a tower in Winterfell, then.\n");
        elseif (get_class($who) == "Sansa")
            print("Let's do this.\n");
        else
            print("Not even if I'm drunk !\n");
    }

}
