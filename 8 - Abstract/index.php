<?php
// Quando ela for extendida, significa que ela vai servir como base
// Se não ele nao roda
abstract class Banco
{
    // Só é visivel no escopo das classes
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    abstract protected function Sacar($s);
    abstract protected function Depositou($d);

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }


}

class Itau extends Banco
{
    // Agora pra classe nao dar erro, você precisar implementar as funções da classe Banco
    // Apenas as Abstracts, a classe banco vai servir como base!

    public function Sacar($s)
    {
        // o -= serve como saldo = saldo - s;
        // pega o saldo e diminui o valor dele com base no $s
        $this->saldo -= $s;
        echo "<br> Sacou: ";
    }
    public function Depositou($d)
    {   
        // += = saldo = saldo + $d
        // Pega o saldo e aumentar apartir de $d
        $this->saldo += $d; 
        echo "<br> Depositou: ";
    }
}

// Inicia a classe Itau na variavel $itau
$itau = new Itau;

// Damos valor a variavel $saldo apartir da função setSaldo
$itau->setSaldo(1000);

// Mostramos o saldo com a função getSaldo
echo "Saldo inicial: ".$itau->getSaldo();

// Depositamos 500 reais e mostramos de novo o saldo
$itau->Depositou(500);
echo "Saldo atualizado: ".$itau->getSaldo();

// Sacamos 1000 reias e mostramos o novo saldo
$itau->Sacar(1000);
echo "Saldo atualizado: ".$itau->getSaldo();