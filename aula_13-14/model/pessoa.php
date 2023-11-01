<?php
namespace app\model;

class pessoa {
    private $nome;
    private $sobreNome;
    private $dataNascimento;
    private $cpfCnpj;
    private $tipo;
    private $telefone;
    private $endereco;

    private function inicializaClasse() {

    }

    public function getNomeCompleto() {
        return $this->nome . ' ' . $this->sobreNome;
    }

    public function getIdade() {
        return 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobreNome($sobreNome) {
        $this->sobreNome = $sobreNome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpfCnpj() {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj($cpfCnpj) {
        $this->cpfCnpj = $cpfCnpj;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function toJson() {
        return json_encode(get_object_vars($this));
    }
}
