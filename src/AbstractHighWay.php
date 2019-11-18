<?php
Abstract class AbstractHighWay
{
    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;
    Abstract public function addVehicule($vehicle);
    public function setcurrentVehicles(array $currentVehicles){
    }
    public function getcurrentVehicles(){
    }
    public function setnbLane(int $nbLane){
    }
    public function getnbLane(){
    }
    public function setmaxSpeed(int $maxSpeed){
    }
    public function getmaxSpeed(){
    }
}