<?php

Class Color {

    static public $verbose = false;
    public $red;
    public $green;
    public $blue;

    static function doc(){
        if (file_exists("Color.doc.txt"))
            return file_get_contents("Color.doc.txt");
        else {
            echo "File does not exist";
            exit();
        }
    }

    function __construct($kwargs)
    {
        if (array_key_exists("rgb", $kwargs)) {
            $color = (int)$kwargs['rgb'];
            $this->red = $color / 65536;
            $this->green = $color % 65536 / 256;
            $this->blue = $color % 65536 % 256;
        }
        elseif (count($kwargs) == 3){
            $this->red = (int)$kwargs["red"];
            $this->green = (int)$kwargs["green"];
            $this->blue = (int)$kwargs["blue"];
        }
        else {
            echo "Wrong number of parameters";
            return;
        }
        if (self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
        return;
    }

    function __destruct()
    {
        if (self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
    }

    function __toString(){
        return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
    }

    function add($obj)
    {
        $new_color = ["red" => $this->red + $obj->red, "green" => $this->green + $obj->green, "blue" => $this->blue + $obj->blue,];
        return (new Color($new_color));
    }

    function sub($obj)
    {
        $new_color = ["red" => $this->red - $obj->red, "green" => $this->green - $obj->green, "blue" => $this->blue - $obj->blue,];
        return (new Color($new_color));
    }

    function mult($fac)
    {
        $new_color = ["red" => $this->red * $fac, "green" => $this->green * $fac, "blue" => $this->blue * $fac];
        return (new Color($new_color));
    }
}

?>
