<?php

class slaNote{
    public $clientId;
    public $name;
    public $note;
    
    public function __construct($clientId,$name,$note) {
        $this->clientId = $clientId;
        $this->name = $name;
        $this->note = $note;
    }
}
