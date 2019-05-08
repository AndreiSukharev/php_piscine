<?php

require_once '../ex00/Color.class.php';

Class Vertex {

    static $verbose = false;
    private $_x;
    private $_y;
    private $_z;
    private $_w = 1.0;
    private $_color;

    function __checkParams($coord){
        return (array_key_exists('x', $coord) && array_key_exists('y', $coord) && array_key_exists('z', $coord));
    }

    static function doc(){
        if (file_exists("Vertex.doc.txt"))
            return file_get_contents("Vertex.doc.txt");
        else {
            echo "File does not exist";
            exit();
        }
    }

    function __construct($coord)
    {
        if ($this->__checkParams($coord)){

            //set x,y,z
            $this->_x = $coord['x'];
            $this->_y = $coord['y'];
            $this->_z = $coord['z'];

            //set w if exists
            if (array_key_exists('w', $coord))
                $this->_w = $coord['w'];

            //set color
            if (array_key_exists('color', $coord))
                $this->_color = $coord['color'];
            else {
                $this->_color = new Color(["red" => 255, "green" => 255, "blue" => 255]);
            }
        }
        else {
            echo "Invalid params\n";
            exit();
        }
        if (self::$verbose == true){
            printf($this . " constructed\n");
        }
    }

    function __destruct()
    {
        if (self::$verbose == true){
            printf($this . " destructed\n");
        }
    }

    function __toString()
    {
        if (self::$verbose){
            return sprintf(
                "Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, $this->_color )",
                $this->_x, $this->_y, $this->_z, $this->_w);
        }
        else{
            return sprintf(
                "Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )",
                $this->_x, $this->_y, $this->_z, $this->_w);
        }
    }

    function __get($property){
        if ($property === '_x')
            return $this->_x;
        elseif ($property === '_y')
            return $this->_y;
        elseif ($property === '_z')
            return $this->_z;
        elseif ($property === '_w')
            return $this->_y;
        elseif ($property === '_color')
            return $this->_color;
    }

    function __set($property, $value){
        if ($property === '_x')
             $this->_x = $value;
        elseif ($property === '_y')
             $this->_y = $value;
        elseif ($property === '_z')
             $this->_z = $value;
        elseif ($property === '_w')
             $this->_y = $value;
        elseif ($property === '_color')
             $this->_color = $value;
    }

}
