<?php
class Clonaria{
    public $numero;

    // Caso essa classe seja clonada, pode ter um construct quando for clonada
    public function __clone(){
        echo"A classe foi clonada com sucesso";
    }
}   

$clone = new Clonaria();
$clone->numero = 10;

// Resposta 10
echo $clone->numero;
/*========================================================================== */

echo"<br>";

$copiaBarata = $clone;
$copiaBarata->numero = 13;

// Resposta 13
// Mesmo chamando a outra variavel, ela, porem ela e igual a $clone
echo $clone->numero;

/*========================================================================== */

// Porém conseguimos criar uma copia sem qualquer ligação com a classe inicial
// Basta usar o clone

echo"<br>";

// Esse comando clona a classe já instaciada sem qualquer vinculo com a classe incial
$copiaOriginal = clone $clone;
$copiaOriginal->numero = 20;
echo $copiaOriginal->numero;

