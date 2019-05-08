<?php

require_once '../ex01/Vertex.class.php';

Class Vector
{
    static $verbose = false;
    private $_x;
    private $_y;
    private $_z;
    private $_w = 0.0;

    static function doc(){
        if (file_exists("Vector.doc.txt"))
            return file_get_contents("Vector.doc.txt");
        else {
            echo "File does not exist";
            exit();
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

    }

    function __construct($kwargs)
    {
        //if orig exists
        if (array_key_exists('orig', $kwargs)) {
            $orig = new Vertex(['x' => $kwargs['orig']->_x, 'y' => $kwargs['orig']->_y, 'z' => $kwargs['orig']->_z]);
        }
        else {
            $orig = new Vertex(['x' => 0.0, 'y' => 0.0, 'z' => 0.0, 'w' => 0.0]);
        }

        //if dest exists
        if (array_key_exists('dest', $kwargs)){
            $this->_x = $kwargs['dest']->_x - $orig->_x;
            $this->_y = $kwargs['dest']->_y - $orig->_y;
            $this->_z = $kwargs['dest']->_z - $orig->_z;
        }
        else {
            echo "Invalid params\n";
            exit();
        }

        //print construct
        if (self::$verbose) {
            printf($this . " constructed\n");
        }
    }

    function __destruct() {
        if (self::$verbose) {
            printf($this . " destructed\n");
        }
    }

    function __tostring() {
        return ($ret = sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )",
            $this->_x, $this->_y, $this->_z, $this->_w) );
    }


//    shit funcs


    public function magnitude()
    {
        return (float)sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z));
    }

    function normalize() {
        $len = $this->magnitude();
        if ($len == 1) {
            return clone $this;
        }
        $norm = new Vector(array('dest' => new Vertex(array(
            'x' => $this->_x / $len,
            'y' => $this->_y / $len,
            'z' => $this->_z / $len
        ))));
        return ($norm);
    }
    function add(Vector $rhs) {
        $add = new Vector(array('dest' => new Vertex(array(
            'x' => $this->_x + $rhs->_x,
            'y' => $this->_y + $rhs->_y,
            'z' => $this->_z + $rhs->_z
        ))));
        return ($add);
    }
    function sub(Vector $rhs) {
        $sub = new Vector(array('dest' => new Vertex(array(
            'x' => $this->_x - $rhs->_x,
            'y' => $this->_y - $rhs->_y,
            'z' => $this->_z - $rhs->_z
        ))));
        return ($sub);
    }
    function opposite() {
        $opp = new Vector(array('dest' => new Vertex(array(
            'x' => $this->_x * (-1),
            'y' => $this->_y * (-1),
            'z' => $this->_z * (-1)
        ))));
        return ($opp);
    }
    function scalarProduct($k) {
        $scl = new Vector(array('dest' => new Vertex(array(
            'x' => $this->_x * $k,
            'y' => $this->_y * $k,
            'z' => $this->_z * $k
        ))));
        return ($scl);
    }
    function dotProduct(Vector $rhs) {
        $dot = (float)(
            $this->_x * $rhs->_x +
            $this->_y * $rhs->_y +
            $this->_z * $rhs->_z
        );
        return ($dot);
    }
    function crossProduct(Vector $rhs) {
        $cross = new Vector(array('dest' => new Vertex(array(
            'x' => $this->_y * $rhs->_z - $this->_z * $rhs->_y,
            'y' => $this->_z * $rhs->_x - $this->_x * $rhs->_z,
            'z' => $this->_x * $rhs->_y - $this->_y * $rhs->_x
        ))));
        return ($cross);
    }
    function cos(Vector $rhs) {
        if ($this->magnitude() == "norm"|| $rhs->magnitude() == "norm") {
            return (0);
        } else {
            $multilen = $this->magnitude() * $rhs->magnitude();
            return ($this->dotProduct($rhs) / $multilen);
        }
    }

}

