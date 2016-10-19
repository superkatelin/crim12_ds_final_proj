<?php

class turbineDeployed{
    public $turbineDeployedId;
    public $turbineId;
    public $siteId;
    public $serialNumber;
    public $deployedDate;
    public $totalFiredHours;
    public $totalStarts;
    public $lastPlannedOutageDate;
    public $lastUnplannedOutageDate;
    
    public function __construct($turbineDeployedId,$turbineId,$siteId,$serialNumber,$deployedDate,$totalFiredHours,$totalStarts,$lastPlannedOutageDate,$lastUnplannedOutageDate) {
        $this->turbineDeployedId = $turbineDeployedId;
        $this->turbineId = $turbineId;
        $this->siteId = $siteId;
        $this->serialNumber = $serialNumber;
        $this->deployedDate = $deployedDate;
        $this->totalFiredHours = $totalFiredHours;
        $this->totalStarts = $totalStarts;
        $this->lastPlannedOutageDate = $lastPlannedOutageDate;
        $this->lastUnplannedOutageDate = $lastUnplannedOutageDate;
    }
}