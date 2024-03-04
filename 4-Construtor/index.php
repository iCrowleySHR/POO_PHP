<?php
class Login{

    // Variaveis privadas
    private $email;
    private $senha;
    private $nome;

/*================================================ Construct ======================================================= */
    // serve para pegar os valores enviados pela classe
    public function __construct($email, $senha, $nome){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }

/*================================================ GET ============================================================= */

    // Para acessar a varivaies privadas, usamos functions
    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getNome(){
        return $this->nome;
    }

/*================================================ SET ============================================================= */
    public function setEmail($e){
        //Tira caracteres que não sao aceitos no email
        $email = filter_var($e, FILTER_SANITIZE_EMAIL); 

        // Atribuimos um valor para variavel private email
        $this->email = $email;
    }

    public function setSenha($s){
        $this->senha= $s;
    }

    public function setNome($n){
        $this->nome= $n;
    }

/*================================================ FUNCTION ============================================================= */
    // Valida o email e senha
    public function Logar(){
        if ($this->email == "teste@teste.com" && $this->senha = "123456") {
            echo "Logado com sucesso <br>";
        } else {
            echo "Dados invalidos";
        }
    }
}

// Acessa a clase Login e envia parametros para a construct
$logar = new Login("teste@teste.com","123456","Gustavo");

// Rodamos a função para validar email e senha
$logar->Logar();

// Acessamos a função getEmail para pegar o valor do email
echo $logar->getEmail();
echo"<br>";
// Acessamos a função getEmail para pegar o valor do email
echo $logar->getSenha();
echo"<br>";
// Acessamos a função getEmail para pegar o valor do email
echo $logar->getNome();
