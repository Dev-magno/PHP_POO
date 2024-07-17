<?php
class Operacao{
    public $somar;
    public $adicionar;
    public $multiplicar;
    public $dividir;

    function somar(){
        
    }
    function subtrair(){

    }
    function multiplicar(){

    }
    function dividir(){

    }

    function resultado(){
        echo "A soma de $this->soma dividido por $this->dividir e multiplicado por $this->multiplicar é igual a ";
    }
}

$minhaOperacao = new Operacao();
$minhaOperacao->somar();
$minhaOperacao->subtrair();
$minhaOperacao->multiplicar();
$minhaOperacao->dividir();
$minhaOperacao->resultado();

?>
