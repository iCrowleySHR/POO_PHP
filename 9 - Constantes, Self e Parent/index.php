<?php
class Gustavo{
    // Variavel constante
    const nome = "Gustavo";
}

class Santos extends Gustavo{
    // Variavel constante
    const nome = "Santos";

    public function exibirNome(){
        // Parent é pra pegar da classe que herdada
        // Self e pra pegar a constante da mesma classe

        echo parent::nome ." ". self::nome;
        // Resultado: Gustavo Santos
    }
}

$nomeCompleto = new Santos;
$nomeCompleto->exibirNome();