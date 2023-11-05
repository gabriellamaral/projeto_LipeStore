<?php

session_start();

include_once("conexao.php");
include_once("url.php");

$dados = $_POST;

if(!empty($dados)){

    //Inserção e dados no banco.

    if($dados["type"] === "create"){
        //Preparando para inserir registro no banco
        $nome = $dados['nome'];

        $comando_sql_inserir = $conn->prepare("INSERT INTO tb_tamanho(nome) VALUES (:nome)");
        $comando_sql_inserir->bindParam(':nome', $nome);

        try{
          $comando_sql_inserir->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Tamanho Cadastrado com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          }

     //Atualizando os dados no banco
    }elseif($dados["type"] === "editar"){
        $codtamanho = $dados["codtamanho"];
        $nome = $dados['nome'];

        $query = "UPDATE tb_tamanho SET  nome = :nome WHERE codtamanho = :codtamanho";
  
        $comando_sql_atualizar = $conn->prepare($query);
        $comando_sql_atualizar->bindParam(':nome', $nome);
        $comando_sql_atualizar->bindParam(':codtamanho', $codtamanho);

        try{
          $comando_sql_atualizar->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Dados do tamanho atualizado com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          } 
    }  elseif($dados["type"] === "delete"){

      //exclusão do registro pelo id do contato
      $codtamanho = $dados["codtamanho"];
      $query = "DELETE FROM tb_funcionario WHERE codtamanho = :codfuncionario";
      $result = $conn->prepare($query);
      $result->bindParam(":codtamanho", $codtamanho);

      try{

        $result->execute();
        //Mensagem que aparecerá na session da home
        $_SESSION["msg"] = "Tamanho apagado com sucesso SUCESSO!!!";

        }catch(PDOException $e){
        //ERRO NA CONEXÃO
        $erro = $e->getMessage();
        echo "Erro: $erro";
        } 
  }

    //Voltar para a home utilizando uma função do php
    header("location:" . $BASE_URL . "../View/dados_tamanho.php");

    //Seleção de dados
}else{


//VAMOS INICIALIZAR O ID VAZIO
$codtamanho;
if(!empty($_GET)){
$codtamanho = $_GET["codtamanho"];
}

//RETORNA OS DADOS DE UM CONTATO
if(!empty($codtamanho)){
        
$query = "SELECT * FROM tb_tamanho WHERE codtamanho = :codtamanho";
$result = $conn->prepare($query);
$result->bindParam(":codtamanho", $codtamanho); 
$result->execute();

$tamanho = $result->fetch();

}else{
//RETORNA TODOS OS DADOS
$tamanhos = [];

$query = "SELECT * FROM tb_tamanho";
$result = $conn->prepare($query);
$result->execute();
        
//MOSTRA TODOS OS DADOS POR MEIO DA PDO
$tamanhos = $result->fetchAll();
}

}

//Limpando/Fechando a conexão
$conn = null;

?>