<?php

    class Estacionamento {

        private $codigo;
        private $veiculo;
        private $valor;
        private $tempo;

        public function __construct(
            string $codigo,
            string $veiculo,
            string $valor,
            DateTime $tempo
        )
        {
            $this->codigo = $codigo;
            $this->veiculo = $veiculo;
            $this->valor = $valor;
            $this->tempo = $tempo;
        }

        //Métodos Getters e Setters:

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function getCodigo()
        {
            return $this->codigo;
        }

        public function setVeiculo($veiculo){
            $this->veiculo = $veiculo;
        }
        
        public function getVeiculo()
        {
            return $this->veiculo;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }

        public function getValor()
        {
            return $this->valor;
        }

        public function setData($tempo){
            $this->tempo = $tempo;
        }

        public function getData()
        {
            return $this->tempo;
        }

        public function getPeriodoOcupacaoVaga(){
            $data = $this->getData();
            $dataSaida = new DateTime();
            $intervalo = $data->diff($dataSaida); 
            return $intervalo->format('d/m/Y H:i');
        }

        public function getInfoVagas(){
            $data = $this->getData()->format('d/m/Y H:i');
            return json_encode(array(
                "Código" => $this->getCodigo(),
                "Veículo" => $this->getVeiculo(),
                "Valor" => $this->getValor(),
                "Data de Entrada" => $data,
                "Tempo de Duração" => $this->getPeriodoOcupacaoVaga()
            ));
        }
    }
?>