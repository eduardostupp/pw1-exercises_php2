<?php
    namespace app\model;

    class endereco {
        private $logradouro;
        private $bairro;
        private $cidade;
        private $estado;
        private $cep;
        private $numero;

        public function getLograouro() {
            return $this->logradouro;

    }