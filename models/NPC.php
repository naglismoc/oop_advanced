<?php

class NPC
{
    private $name;
    private $lvl;
    private $str;
    private $atk;
    private $def;
    private $hp;
    private $dextirity;
    private $accuracy;
    private $canTalk;
    private $hasQuest;
    private $isAggro;

    public function __construct($hp)
    {
        $this->hp = $hp;
    }

    public function getHp(){
        return $this->hp;
    }

    public function setHp($hp){
        $this->hp = $hp;
    }

    public function __toString(){
        // return "class:NPC name:".$this->name. ", lvl:".$this->lvl;
        return "Cia NPC klase";
    }

    public function sayAuch()
    {
        echo "Ayayay, it hurts!";
    }
}
