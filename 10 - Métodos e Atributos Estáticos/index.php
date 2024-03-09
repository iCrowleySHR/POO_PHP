<?php
class Estatico{
    // Variavel estatica
    public static $usuario;

    // Função estatica
    public static function Logou(){
        // Para chamar variavel estatica precisa usar o Self
        // this->usuario não funciona
        echo "O usuario logou! Parabéns " . self::$usuario;
    }

    // Função NAO estatica
    public function Deslogou(){
        echo "<br> O " . self::$usuario . " Deslogou!";
    }
}

// Adicionado dados na variavel estatica
Estatico::$usuario = "Gustavo";

// Chamando função estatica
Estatico::Logou();

// Chamando a função Não estatica
$funcao = new Estatico;
$funcao->Deslogou();
