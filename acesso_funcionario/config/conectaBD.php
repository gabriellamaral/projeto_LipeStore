<?php
    
class Conexao{
    
    function AbrirConexao(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd ="bd_LojaDeRoupa";  
    $conn = new mysqli($host, $user, $pass, $bd);
    try {
        $conn = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);
        //apagar esses dois echos depois
        echo "a conexao foi aberta";
        echo "<br>";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
        $erro = $e->get_Message();
        echo "Erro: $erro";
        }
   }

   function FecharConexao(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd ="bd_LojaDeRoupa";  
    $conn = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);
    //ve como fecha a conexao com o bando de dados depois
    return;
   }

}


?>
