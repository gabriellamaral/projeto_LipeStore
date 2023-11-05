<?php

session_start();

include_once("conexao.php");
include_once("url.php");

$dados = $_POST;

//Modificações do banco

if(!empty($dados)){

    //Inserção e dados

    if($dados["type"] === "create"){
        //Preparando para inserir registro no banco
        $nome = $dados['nome'];

        $comando_sql_inserir = $conn->prepare("INSERT INTO tb_cor(nome) VALUES (:nome)");
        //passando os parametros para o comando
        $comando_sql_inserir->bindParam(':nome', $nome);
      
        //executando o comando

        try{

          $comando_sql_inserir->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Cor Cadastrada com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          }
  

     //Atualizando os dados do contato no banco
    }elseif($dados["type"] === "editar"){

        //atualização do registro no banco

        //PARA ATUALIZAR QUALQUER REGISTRO EU PRECISO QUIE O NAME DO FORMULARIO ESTAVA CORRETAMENTE ESCRITO AQUI
        $codcor = $dados["codcor"];
        $nome = $dados["nome"];
  
        $query = "UPDATE tb_cor SET  nome = :nome WHERE codcor = :codcor";
  
        $comando_sql_atualizar = $conn->prepare($query);
        $comando_sql_atualizar->bindParam(':nome', $nome);
        $comando_sql_atualizar->bindParam(':codcor', $codcor);

        try{
          $comando_sql_atualizar->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Cor atualizada com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          } 
          
        } elseif($dados["type"] === "delete"){

          //exclusão do registro pelo id do contato
          $codcor = $dados["codcor"];
          $query = "DELETE FROM tb_cor WHERE codcor = :codcor";
          $result = $conn->prepare($query);
          $result->bindParam(":codcor", $codcor);
  
          try{
    
            $result->execute();
            //Mensagem que aparecerá na session da home
            $_SESSION["msg"] = "Cor deletada com SUCESSO!!!";
    
            }catch(PDOException $e){
            //ERRO NA CONEXÃO
            $erro = $e->getMessage();
            echo "Erro: $erro";
            } 
  }
    //Voltar para a home utilizando uma função do php
    header("location:" . $BASE_URL . "../View/dados_cor.php");

    //Seleção de dados
}else{


//VAMOS INICIALIZAR O ID VAZIO
$codcor;
if(!empty($_GET)){
$codcor = $_GET["codcor"];
}

//RETORNA OS DADOS DE UM CONTATO
if(!empty($codcor)){
        
$query = "SELECT * FROM tb_cor WHERE codcor = :codcor";
$result = $conn->prepare($query);
$result->bindParam(":codcor", $codcor); 
$result->execute();

$codcor = $result->fetch();

}else{
//RETORNA TODOS OS DADOS
$cores = [];

$query = "SELECT * FROM tb_cor";
$result = $conn->prepare($query);
$result->execute();
        
//MOSTRA TODOS OS DADOS POR MEIO DA PDO
$cores = $result->fetchAll();
}

}

//Limpando/Fechando a conexão
$conn = null;

?>