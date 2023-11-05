<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bd_LojaDeRoupa";

try{

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    
//ATIVAR O MODO DE ERROS
//Com esses atributos do PDO o sistema para e mostra o erro
//Caso aconteça algum erro aconteça nas chamadas do banco
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
//ERRO NA CONEXÃO
$erro = $e->getMessage();
echo "Erro: $erro";
}

?>