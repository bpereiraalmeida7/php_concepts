<?php

class Flight {

    private $flightNumber;
    private $cia;
    private $departureAirport;
    private $arrivalAirport;
    private $departureTime;
    private $arrivalTime;
    private $valorTotal;

    public function __construct(
        string $flightNumber,
        string $cia,
        string $departureAirport,
        string $arrivalAirport,
        DateTime $departureTime,
        DateTime $arrivalTime,
        float $valorTotal,
        float $baggagePrice,
        string $liveLoad,
        string $liveLoadPrice
    )
    {
        $this->flightNumber = $flightNumber;
        $this->cia = $cia;
        $this->departureAirport = $departureAirport;
        $this->arrivalAirport = $arrivalAirport;
        $this->departureTime = $departureTime;
        $this->arrivalTime = $arrivalTime;
        $this->valorTotal = $valorTotal;
        $this->baggagePrice = $baggagePrice;
        $this->liveLoad = $liveLoad;
        $this->liveLoadPrice = $liveLoadPrice;

    }

    //Métodos Getters e Setters:

    public function setFlightNumber($flightNumber){
        $this->flightNumber = $flightNumber;
    }

    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    public function setCia($cia){
        $this->cia = $cia;
    }

    public function getCia()
    {
        return $this->cia;
    }

    public function setDepartureAirport($departureAirport){
        $this->departureAirport = $departureAirport;
    }

    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    public function setArrivalAirport($arrivalAirport){
        $this->arrivalAirport = $arrivalAirport;
    }

    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    public function setDepartureTime($departureTime){
        $this->departureTime = $departureTime;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function setArrivalTime($arrivalTime){
        $this->arrivalTime = $arrivalTime;
    }


    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function setLiveload($liveLoad){
        $this->liveLoad = $liveLoad;
    }

    public function getLiveload(){
        return $this->liveLoad;
    }

    public function setBaggagePrice($baggagePrice){
        $this->baggagePrice = $baggagePrice;
    }

    public function getBaggagePrice(){
        return $this->baggagePrice;
    }

    public function setLiveloadPrice($liveLoadPrice){
        $this->liveLoadPrice = $liveLoadPrice;
    }

    public function getLiveloadPrice(){
        return $this->liveLoadPrice;
    }
}
?>