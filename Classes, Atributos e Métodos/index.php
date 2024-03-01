<?php
class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){

        //Para pegar a variavel se usa o $this
        echo $this->nome. "<br>" . $this->idade. " <br> Acabou de falar "; 
    }
}
/*================================================================== */

// Acessa a clase Pessoa
$gualda = new Pessoa(); 

// Atribuimos um valor para a variavel da clase
$gualda->nome = "Gustavo Dos Santos Gualda"; 

// Atribuimos um valor para a variavel da clase
$gualda->idade = 17;

// Chamamos a função falar
$gualda->Falar();
