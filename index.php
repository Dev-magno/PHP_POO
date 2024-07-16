<?php 
require_once '_cabecalho.php'
?>
<h1>Moto</h1>
<form action="">
    <label for="">Marca</label>
    <input type="text" name="" id="">

    <label for="">Modelo</label>
    <input type="text" name="" id="">

    <label for="">Tipo</label>
    <input type="text" name="" id="">
</form>

<?php 
require_once '_rodape.php'
?>


class Moto{
    public $marca;
    public $modelo;
    public $tipo;

    public function ligar(){
        echo "Dando partida na minha $this->marca $this->modelo $this->tipo<br>";
    }


    public function pilotar(){
        echo "Pilotando minha $this->marca $this->modelo $this->tipo<br>";
    }

    public function desligar(){
        echo "Desligando minha $this->marca $this->modelo $this->tipo<br>";
    }

    public function estacionar(){
        echo "Estacionar minha $this->marca $this->modelo $this->tipo<br>";
    }
}

$minhaMoto = new Moto();
$minhaMoto->marca = "Honda";
$minhaMoto->marca = "Yamaha";
$minhaMoto->tipo = "Lander";
$minhaMoto->ligar();
$minhaMoto->pilotar();
$minhaMoto->desligar();
$minhaMoto->estacionar();
