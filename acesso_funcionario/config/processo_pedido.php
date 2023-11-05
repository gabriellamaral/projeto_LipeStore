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
        $ID = $dados['ID'];
        $cliente =  $dados['cliente'];      
        $nome= $dados['nome'];
        $cor= $dados['cor'];
        $tamanho = $dados['tamanho'];
        $data_emissao = $dados['data_emissao'];
        $quantidade = $dados['quantidade'];
        $valor_unit = $dados['valor_unit'];
        $valor_final =  $dados['valor_final'];
      

        $comando_sql_inserir = $conn->prepare("INSERT INTO tb_pedido(ID, cliente, nome, cor, tamanho, data_emissao, quantidade, valor_unit, valor_final,) VALUES (:ID, :nome, :data_de_nascimento, :rua, :bairro, :cidade, :cep, :uf, :usuario, :senha)");
        $comando_sql_inserir->bindParam(':ID', $ID);
        $comando_sql_inserir->bindParam(':cliente', $cliente);
        $comando_sql_inserir->bindParam(':nome', $nome);
        $comando_sql_inserir->bindParam(':cor', $cor);
        $comando_sql_inserir->bindParam(':tamanho', $tamanho);
        $comando_sql_inserir->bindParam(':data_emissao', $data_emissao);
        $comando_sql_inserir->bindParam(':quantidade', $quantidade);
        $comando_sql_inserir->bindParam(':valor_unit', $valor_unit);
        $comando_sql_inserir->bindParam(':valor_final', $valor_final);
        
        try{
          $comando_sql_inserir->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "pedido Cadastrado com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          }
     //Atualizando os dados do pedido no banco
    }elseif($dados["type"] === "editar"){
        //PARA ATUALIZAR QUALQUER REGISTRO EU PRECISO QUIE O NAME DO FORMULARIO ESTAVA CORRETAMENTE ESCRITO AQUI
        $ID = $dados["ID"];
        $nome = $dados['cliente'];
        $data_nascimento = $dados['data_emissao'];
        $cep = $dados['cep'];
        $uf = $dados['uf'];
        $cidade = $dados['cidade'];
        $bairro = $dados['bairro'];
        $rua = $dados['rua'];
        $usuario =  $dados['usuario'];
        $senha =  $dados['senha'];

        $query = "UPDATE tb_pedido SET  nome = :nome, data_de_nascimento = :data_de_nascimento, rua = :rua, bairro = :bairro, cidade = :cidade, cep = :cep, uf = :uf, usuario = :usuario, senha = :senha WHERE codpedido = :codpedido";
  
        $comando_sql_atualizar = $conn->prepare($query);
        $comando_sql_atualizar->bindParam(':ID', $ID);
        $comando_sql_atualizar->bindParam(':data_emissao', $data_emissao);
        $comando_sql_atualizar->bindParam(':nome', $nome);
        $comando_sql_atualizar->bindParam(':cor', $cor);
        $comando_sql_atualizar->bindParam(':tamanho', $tamanho);
        $comando_sql_atualizar->bindParam(':quantidade', $quantidade);
        $comando_sql_atualizar->bindParam(':valor_unit', $valor_unit);
        $comando_sql_atualizar->bindParam(':valor_final', $valor_final);


        try{
          $comando_sql_atualizar->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Dados do pedido atualizado com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          } 
    }  elseif($dados["type"] === "delete"){

      //exclusão do registro pelo id do contato
      $codpedido = $dados["codpedido"];
      $query = "DELETE FROM tb_pedido WHERE codpedido = :codpedido";
      $result = $conn->prepare($query);
      $result->bindParam(":codpedido", $codpedido);

      try{

        $result->execute();
        //Mensagem que aparecerá na session da home
        $_SESSION["msg"] = "pedido apagado com sucesso SUCESSO!!!";

        }catch(PDOException $e){
        //ERRO NA CONEXÃO
        $erro = $e->getMessage();
        echo "Erro: $erro";
        } 
  }

    //Voltar para a home utilizando uma função do php
    header("location:" . $BASE_URL . "../View/dados_pedido.php");

    //Seleção de dados
}else{


//VAMOS INICIALIZAR O ID VAZIO
$codpedido;
if(!empty($_GET)){
$codpedido = $_GET["codpedido"];
}

//RETORNA OS DADOS DE UM CONTATO
if(!empty($codpedido)){
        
$query = "SELECT * FROM tb_pedido WHERE codpedido = :codpedido";
$result = $conn->prepare($query);
$result->bindParam(":codpedido", $codpedido); 
$result->execute();

$pedido = $result->fetch();

}else{
//RETORNA TODOS OS DADOS
$pedidos = [];

$query = "SELECT * FROM tb_pedido";
$result = $conn->prepare($query);
$result->execute();
        
//MOSTRA TODOS OS DADOS POR MEIO DA PDO
$pedidos = $result->fetchAll();
}

}

//Limpando/Fechando a conexão
$conn = null;

?>