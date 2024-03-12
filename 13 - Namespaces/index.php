<?php

/*
    Quando se tem dois arquivos e com classes com o mesmo nome
    Se usa o Namespaces! Com isso não da erro
    Há duas maneiras que implementar isso
*/

// Incluindo o arquivo produto da pasta classes
include ("classes/produto.php");

// Incluindo o arquivo produto da pasta models
include ("models/produto.php");


// 1
// Coloca antes da barra o nome do namespaces e depois a função
$produto = new models\Produto;
$produto->Mensagem();

echo"<br>";

// 2
// Usamos apelidos ao inves de chamar o nome completo. Após o "as" é o apelido
use classes\Produto as produto_classes;

// Agora chamamos pelo o apelido :)
$product = new produto_classes;
$product->Mensagem();
