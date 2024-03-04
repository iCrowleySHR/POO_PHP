<?php
class Veiculo{
    private $modelo;
    private $cor;
    private $ano;

    // Pegando os valores enviados pela classe
    public function __construct($modelo, $cor, $ano){
        // Inserindos os dados nas variaveis privadas
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setAno($ano);
    }
    private function setModelo($m){
        $this->modelo = $m;
    }
    private function setAno($a){
        $this->ano = $a;
    }
    private function setCor($c){
        $this->cor = $c;
    }
}

// A classe carro herda tudo que a classe veiculo tem
// como se a classe veiculo se extendesse para a classe carro
class Carro extends Veiculo{
    public function ligarLimpador(){
        echo"Limpador ligando em 123 <br>";
    }
}

// A classe moto herda tudo que a classe veiculo tem
// como se a classe veiculo se extendesse para a classe moto
class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando grau em 321 <br>";
    }
}

echo"<pre>";

//Enviando os dados para a variaveis do veiculo pela classe carro
$carro = new Carro('Volkwagens','Vermelho','1952');

// Chamando a função que é exclusiva da classe carro
$carro-> ligarLimpador();

// Olhando tudo que tem na classe carro
print_r($carro);

// Enviando os dados para as variaveis do veiculo pela classe moto
$moto = new Moto('Yamaha','Rosa','2034');

// Chamando a função que é exclusiva da classe moto
$moto-> darGrau();

// Olhando tudo que tem na classe moto
print_r($moto);