<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "bd_LojaDeRoupa";

try{

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
$erro = $e->getMessage();
echo "Erro: $erro";
}

?>