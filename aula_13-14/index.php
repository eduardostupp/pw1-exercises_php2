<?php
require_once "model/pessoa.php";

$oPessoa = new \app\model\pessoa();
$oPessoa->setNome("Eduardo");
$oPessoa->setSobreNome("Stupp");

$nomeCompleto = $oPessoa->getNomeCompleto();

echo $nomeCompleto;
?>
