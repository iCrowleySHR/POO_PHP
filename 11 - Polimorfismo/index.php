<?php
class Animal
{
    public function Andar()
    {
        echo "O animal ANDOU!!";
    }
}

class Cavalo extends Animal
{
    // Nos subescrevemos a função herdada, e mostrada a atualizada
    public function Andar()
    {
        echo "O Cavalo andou ANDOU!!";
    }

    // Caso essa função seja APAGADA, ela mostra-rá a função herdada, da classe Animal
}

// Chamamos a classe Cavalo
$cavalo = new Cavalo;

// Chamamos a função Andar
$cavalo->Andar();