<?php

class turbineSerial{
    public $turbineId;
    public $turbineName;
    public $turbineDescription;
    public $capacity;
    public $rampUpTime;
    public $maintenanceInterval;
    public $serialNumber;
    
    public function __construct($turbineId,$turbineName,$turbineDescription,$capacity,$rampUpTime,$maintenanceInterval,$serialNumber) {
        $this->turbineId = $turbineId;
        $this->turbineName = $turbineName;
        $this->turbineDescription = $turbineDescription;
        $this->capacity = $capacity;
        $this->rampUpTime = $rampUpTime;
        $this->maintenanceInterval = $maintenanceInterval;
        $this->serialNumber = $serialNumber;
    }
}
