<?php
require_once 'AbstractHighWay.php';
final class ResidentialWay extends AbstractHighWay
{
    protected $maxSpeed = 50;
    protected $nbLane = 2;
    public function addVehicule($vehicle){
        $this->currentVehicles[] = $vehicle;
    }
}