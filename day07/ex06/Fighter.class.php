<?php

abstract class Fighter
{
    public $type;

    public function __construct($name)
    {
       $this->type = $name;
    }

    abstract function fight($target);

}

?>