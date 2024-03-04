<?php
class Login{

    // Variaveis privadas
    private $email;
    private $senha;


/*================================================ GET ============================================================= */

    // Para acessar a varivaies privadas, usamos functions
    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
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

/*================================================ FUNCTION ============================================================= */
    // Valida o email e senha
    public function Logar(){
        if ($this->email == "teste@teste.com" && $this->senha = "123456") {
            echo "Logado com sucesso";
        } else {
            echo "Dados invalidos";
        }
    }
}

// Acessa a clase Login
$logar = new Login;

// Adicionamos um email na variavel private email
$logar->setEmail("teste@()/teste.com");

// Adicionamos um senha na variavel private senha
$logar->setSenha("123456");

// Rodamos a função para validar email e senha
$logar->Logar();

echo "<br>";

// Acessamos a função getEmail para pegar o valor do email
echo $logar->getEmail();