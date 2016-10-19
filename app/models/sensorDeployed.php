<?php

class sensorDeployed {
    public $sensorDeployedId;
    public $sensorId;
    public $turbineDeployedId;
    public $serialNumber;
    public $deployedDate;
    
    public function __construct($sensorDeployedId,$sensorId,$turbineDeployedId,$serialNumber,$deployedDate){
        $this->sesnorDeployedId = $sensorDeployedId;
        $this->sensorId = $sensorId;
        $this->turbineDeployedId = $turbineDeployedId;
        $this->serialNumber = $serialNumber;
        $this->deployedDate = $deployedDate;
    }
}