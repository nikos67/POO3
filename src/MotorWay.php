<?php
require_once 'AbstractHighWay.php';
final class MotorWay extends AbstractHighWay
{
    protected $maxSpeed = 130;
    protected $nbLane = 4;
    public function addVehicule($vehicle){
        if ($vehicle instanceof Car or $vehicle instanceof Truck){
            $this->currentVehicles[] = $vehicle;
        }
    }
}