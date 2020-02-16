<?php

    class Checkout
    {
        private $flightOutbound;
        private $flightInbound;

        public function __construct(Flight $flightOutbound, Flight $flightInbound = null)
        {
            $this->flightOutbound = $flightOutbound;
            $this->flightInbound = $flightInbound;
        }

        public function generateExtract()
        {
            $valorTotal = $this->flightOutbound->getValorTotal();
            $flightDetailsOutbound = [
                'Voo' => $this->flightOutbound->getFlightNumber(),
                'Companhia' => $this->flightOutbound->getCia(),
                'De' => $this->flightOutbound->getDepartureAirport(),
                'Para' => $this->flightOutbound->getArrivalAirport(),
                'Embarque' => $this->flightOutbound->getDepartureTime()->format('d/m/Y H:i'),
                'Desembarque' => $this->flightOutbound->getArrivalTime()->format('d/m/Y H:i'),
                'Preço da Bagagem' => $this->flightOutbound->getBaggagePrice(),
                'Carga Viva' => $this->flightOutbound->getLiveload(),
                'Preço da Carga' => $this->flightOutbound->getLiveloadPrice(),
                'Valor' => $this->flightOutbound->getValorTotal(),
            ];

            $flightDetailsInbound = [];
            if (! is_null($this->flightInbound)) {
                $valorTotal += $this->flightInbound->getValorTotal();
                $valorTotal += $this->flightInbound->getBaggagePrice();
                $valorTotal += $this->flightInbound->getLiveloadPrice(); 
                $valorTotal += $this->flightOutbound->getBaggagePrice();
                $valorTotal += $this->flightOutbound->getLiveloadPrice(); 
                $flightDetailsInbound = [
                    'Voo' => $this->flightInbound->getFlightNumber(),
                    'Companhia' => $this->flightInbound->getCia(),
                    'De' => $this->flightInbound->getDepartureAirport(),
                    'Para' => $this->flightInbound->getArrivalAirport(),
                    'Embarque' => $this->flightInbound->getDepartureTime()->format('d/m/Y H:i'),
                    'Desembarque' => $this->flightInbound->getArrivalTime()->format('d/m/Y H:i'),
                    'Preço da Bagagem' => $this->flightInbound->getBaggagePrice(),
                    'Carga Viva' => $this->flightInbound->getLiveload(),
                    'Preço da Carga' => $this->flightInbound->getLiveloadPrice(),
                    'Valor' => $this->flightInbound->getValorTotal(),
                ];
            }

            return (object) [
                'flightOutbound' => $flightDetailsOutbound,
                'flightInbound' => $flightDetailsInbound,
                'valorTotal' => $valorTotal
            ];
        }
    }

?>