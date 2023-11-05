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
        
        $comando_sql_inserir = $conn->prepare("INSERT INTO tb_categoria(nome) VALUES (:nome)");
        $comando_sql_inserir->bindParam(':nome', $nome);
        
        try{
          $comando_sql_inserir->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Categoria cadastrada com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          }
     //Atualizando os dados do contato no banco
    }elseif($dados["type"] === "editar"){
        //PARA ATUALIZAR QUALQUER REGISTRO EU PRECISO QUIE O NAME DO FORMULARIO ESTAVA CORRETAMENTE ESCRITO AQUI
        $codcategoria = $dados["codcategoria"];
        $nome = $dados['nome'];

        $query = "UPDATE tb_categoria SET  nome = :nome WHERE codcategoria = :codcategoria";
  
        $comando_sql_atualizar = $conn->prepare($query);
        $comando_sql_atualizar->bindParam(':nome', $nome);
        $comando_sql_atualizar->bindParam(':codcategoria', $codcategoria);

        try{
          $comando_sql_atualizar->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Categoria atualizado com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          } 
    }  elseif($dados["type"] === "delete"){

      //exclusão do registro pelo id do contato
      $codcategoria = $dados["codcategoria"];
      $query = "DELETE FROM tb_categoria WHERE codcategoria = :codcategoria";
      $result = $conn->prepare($query);
      $result->bindParam(":codcategoria", $codcategoria);

      try{

        $result->execute();
        //Mensagem que aparecerá na session da home
        $_SESSION["msg"] = "Categoria excluida com sucesso SUCESSO!!!";

        }catch(PDOException $e){
        //ERRO NA CONEXÃO
        $erro = $e->getMessage();
        echo "Erro: $erro";
        } 
  }

    //Voltar para a home utilizando uma função do php
    header("location:" . $BASE_URL . "../View/dados_categoria.php");

    //Seleção de dados
}else{


//VAMOS INICIALIZAR O ID VAZIO
$codcategoria;
if(!empty($_GET)){
$codcategoria = $_GET["codcategoria"];
}

//RETORNA OS DADOS DE UM CONTATO
if(!empty($codcategoria)){
        
$query = "SELECT * FROM tb_categoria WHERE codcategoria = :codcategoria";
$result = $conn->prepare($query);
$result->bindParam(":codcategoria", $codcategoria); 
$result->execute();

$categoria = $result->fetch();

}else{
//RETORNA TODOS OS DADOS
$categoria = [];

$query = "SELECT * FROM tb_categoria";
$result = $conn->prepare($query);
$result->execute();
        
//MOSTRA TODOS OS DADOS POR MEIO DA PDO
$categoria = $result->fetchAll();
}

}

//Limpando/Fechando a conexão
$conn = null;

?>