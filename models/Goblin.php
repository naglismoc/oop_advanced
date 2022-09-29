<?php
include "./models/NPC.php";

class Goblin extends NPC{
    private $smell;


    public function __construct($id = null, $name = null){
            $this->id = $id;
    }


    public function shoutAndRun()
    {
      echo "<br> blabla glahr!</br>";
    }


    public function __toString(){
        return "Cia Goblin klase";
    }

    public function sayAuch()
    {
        echo "Auuh! glay blahr!";
    }

}

?>