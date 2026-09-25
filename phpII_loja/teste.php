<?php
require 'classe\Produto.class.php';
$produto = new Produto();
$retorno = $produto->conecta();

if($retorno){
    
}else{
    echo "Banco indisponível. Tente mais tarde!";
    exit;
}
echo "</h1>";
