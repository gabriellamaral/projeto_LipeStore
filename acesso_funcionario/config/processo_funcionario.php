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
        $cpf =  $dados['cpf'];
        $data_de_nascimento = $dados['data_de_nascimento'];
        $cep = $dados['cep'];
        $uf = $dados['uf'];
        $cidade = $dados['cidade'];
        $bairro = $dados['bairro'];
        $rua = $dados['rua'];
        $usuario =  $dados['usuario'];
        $senha =  $dados['senha'];

        $comando_sql_inserir = $conn->prepare("INSERT INTO tb_funcionario(cpf, nome, data_de_nascimento, rua, bairro, cidade, cep, uf, usuario, senha) VALUES (:cpf, :nome, :data_de_nascimento, :rua, :bairro, :cidade, :cep, :uf, :usuario, :senha)");
        $comando_sql_inserir->bindParam(':cpf', $cpf);
        $comando_sql_inserir->bindParam(':nome', $nome);
        $comando_sql_inserir->bindParam(':data_de_nascimento', $data_de_nascimento);
        $comando_sql_inserir->bindParam(':rua', $rua);
        $comando_sql_inserir->bindParam(':bairro', $bairro);
        $comando_sql_inserir->bindParam(':cidade', $cidade);
        $comando_sql_inserir->bindParam(':cep', $cep);
        $comando_sql_inserir->bindParam(':uf', $uf);
        $comando_sql_inserir->bindParam(':usuario', $usuario);
        $comando_sql_inserir->bindParam(':senha', $senha);
        try{
          $comando_sql_inserir->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Funcionario Cadastrado com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          }
     //Atualizando os dados do contato no banco
    }elseif($dados["type"] === "editar"){
        //PARA ATUALIZAR QUALQUER REGISTRO EU PRECISO QUIE O NAME DO FORMULARIO ESTAVA CORRETAMENTE ESCRITO AQUI
        $codfuncionario = $dados["codfuncionario"];
        $nome = $dados['nome'];
        $data_nascimento = $dados['data_de_nascimento'];
        $cep = $dados['cep'];
        $uf = $dados['uf'];
        $cidade = $dados['cidade'];
        $bairro = $dados['bairro'];
        $rua = $dados['rua'];
        $usuario =  $dados['usuario'];
        $senha =  $dados['senha'];

        $query = "UPDATE tb_funcionario SET  nome = :nome, data_de_nascimento = :data_de_nascimento, rua = :rua, bairro = :bairro, cidade = :cidade, cep = :cep, uf = :uf, usuario = :usuario, senha = :senha WHERE codfuncionario = :codfuncionario";
  
        $comando_sql_atualizar = $conn->prepare($query);
        $comando_sql_atualizar->bindParam(':nome', $nome);
        $comando_sql_atualizar->bindParam(':data_de_nascimento', $data_nascimento);
        $comando_sql_atualizar->bindParam(':rua', $rua);
        $comando_sql_atualizar->bindParam(':bairro', $bairro);
        $comando_sql_atualizar->bindParam(':cidade', $cidade);
        $comando_sql_atualizar->bindParam(':cep', $cep);
        $comando_sql_atualizar->bindParam(':uf', $uf);
        $comando_sql_atualizar->bindParam(':usuario', $usuario);
        $comando_sql_atualizar->bindParam(':senha', $senha);
        $comando_sql_atualizar->bindParam(':codfuncionario', $codfuncionario);

        try{
          $comando_sql_atualizar->execute();
          //Mensagem que aparecerá na session da home
          $_SESSION["msg"] = "Dados do funcionario atualizado com SUCESSO!!!";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          } 
    }  elseif($dados["type"] === "delete"){

      //exclusão do registro pelo id do contato
      $codfuncionario = $dados["codfuncionario"];
      $query = "DELETE FROM tb_funcionario WHERE codfuncionario = :codfuncionario";
      $result = $conn->prepare($query);
      $result->bindParam(":codfuncionario", $codfuncionario);

      try{

        $result->execute();
        //Mensagem que aparecerá na session da home
        $_SESSION["msg"] = "Funcionario apagado com sucesso SUCESSO!!!";

        }catch(PDOException $e){
        //ERRO NA CONEXÃO
        $erro = $e->getMessage();
        echo "Erro: $erro";
        } 
  }

    //Voltar para a home utilizando uma função do php
    header("location:" . $BASE_URL . "../View/dados_funcionario.php");

    //Seleção de dados
}else{


//VAMOS INICIALIZAR O ID VAZIO
$codfuncionario;
if(!empty($_GET)){
$codfuncionario = $_GET["codfuncionario"];
}

//RETORNA OS DADOS DE UM CONTATO
if(!empty($codfuncionario)){
        
$query = "SELECT * FROM tb_funcionario WHERE codfuncionario = :codfuncionario";
$result = $conn->prepare($query);
$result->bindParam(":codfuncionario", $codfuncionario); 
$result->execute();

$funcionario = $result->fetch();

}else{
//RETORNA TODOS OS DADOS
$funcionarios = [];

$query = "SELECT * FROM tb_funcionario";
$result = $conn->prepare($query);
$result->execute();
        
//MOSTRA TODOS OS DADOS POR MEIO DA PDO
$funcionarios = $result->fetchAll();
}

}

//Limpando/Fechando a conexão
$conn = null;

?>