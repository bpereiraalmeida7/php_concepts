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

    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    public function getCia()
    {
        return $this->cia;
    }

    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function getLiveload(){
        return $this->liveLoad;
    }


    public function getBaggagePrice(){
        return $this->baggagePrice;
    }


    public function getLiveloadPrice(){
        return $this->liveLoadPrice;
    }
}
?>