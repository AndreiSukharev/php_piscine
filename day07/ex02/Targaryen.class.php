<?php

class Targaryen{

    public function resistsFire(){
        return false;
    }

    function getBurned(){
        if ($this->resistsFire() == false){
            return "emerges naked but unharmed";
        }
        else {
            return "burns alive";
        }
    }
}