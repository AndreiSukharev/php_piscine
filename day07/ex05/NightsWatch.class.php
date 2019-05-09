<?php

class NightsWatch {

    private $recruits = [];

    function recruit($soldier){
        if ($soldier instanceof IFighter){
            $this->recruits[] = $soldier;
        }
    }

    function fight(){
        foreach ($this->recruits as $recruit){
            print($recruit->fight());
        }
    }

}

?>
