<?php
class Acoes
{
    // Função privada, só pode ser acessada no escopo da classe
    private function Privada()
    {
        echo "Função Privada <br>";
    }

    // Função publica, pode ser acessada por qualquer um
    public function Publica()
    {
        echo "Função Pública <br>";
    }

    // Só da para acessar na classe e nas classes extendidas
    // Se quiser mostrar precisa ser jogar na função mostrarPrivada
    protected function Protected(){
        echo "Função Protegida <br>";
    }

    // Para mostrar funções privadas devemos criar uma função publica e mostrando ela!
    public function mostrarPrivada($funcao)
    {
        $this->$funcao();
    }
}


// Acessa a classe Acoes
$classe = new Acoes;

// Acessa a função PUBLICA mostrarAcao que retorna a função PRIVADA Andar
$classe->mostrarPrivada("Privada");

// Acessa a função publica
$classe->Publica();

// Acessa a função protegida
$classe->mostrarPrivada("Protected");

