<?php
require_once 'AbstractHighWay.php';
final class PedestrianWay extends AbstractHighWay
{
    protected $maxSpeed = 10;
    protected $nbLane = 1;
    public function addVehicule($vehicle){
        if ($vehicle instanceof Bicycle){
            $this->currentVehicles[] = $vehicle;
        }
    }
}