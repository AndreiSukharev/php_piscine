<?php

include_once('Fighter.class.php');

class UnholyFactory
{
    public $army = [];
    private $types = ["foot soldier", "archer", "assassin"];

    public function absorb($recruit){
        if (in_array($recruit->type, $this->types)){
            if (!array_key_exists($recruit->type, $this->army)){
                $this->army[$recruit->type] = $recruit;
                print ("(Factory absorbed a fighter of type $recruit->type)\n");
            }
            else {
                print ("(Factory already absorbed a fighter of type $recruit->type)\n");
            }
        }
        else {
            print ("(Factory can't absorb this, it's not a fighter)\n");
        }
    }

    public function fabricate($requested_fighter){
        if (array_key_exists($requested_fighter, $this->army)){
            print ("(Factory fabricates a fighter of type $requested_fighter)\n");
            return $this->army[$requested_fighter];
        }
        else{
            print ("(Factory hasn't absorbed any fighter of type $requested_fighter)\n");
            return null;
        }

    }

}


?>
