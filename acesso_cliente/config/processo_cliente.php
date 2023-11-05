<?php

session_start();

include_once("conexao.php");
include_once("url.php");

$dados = $_POST;


if(!empty($dados)){

    //Inserção e dados
    if($dados["type"] === "create"){
        $nome = $dados['nome'];
        $cpf =  $dados['cpf'];
        $telefone =  $dados['tel'];
        $numero =(int) $dados['numero'];
        $email = $dados['email'];
        $cep = (int)  $dados['cep'];
        $uf = $dados['uf'];
        $cidade = $dados['cidade'];
        $bairro = $dados['bairro'];
        $rua = $dados['rua'];
        $usuario =  $dados['login'];
        $senha =  $dados['senha'];

        $comando_sql_inserir = $conn->prepare("INSERT INTO tb_cliente(cpf, nome, telefone, email, rua, bairro, cidade, cep, numero, uf, usuario, senha) VALUES (:cpf, :nome, :telefone, :email, :rua, :bairro, :cidade, :cep, :numero, :uf, :usuario, :senha)");
        $comando_sql_inserir->bindParam(':cpf', $cpf);
        $comando_sql_inserir->bindParam(':nome', $nome);
        $comando_sql_inserir->bindParam(':telefone', $telefone);
        $comando_sql_inserir->bindParam(':email', $email);
        $comando_sql_inserir->bindParam(':rua', $rua);
        $comando_sql_inserir->bindParam(':bairro', $bairro);
        $comando_sql_inserir->bindParam(':cidade', $cidade);
        $comando_sql_inserir->bindParam(':cep', $cep);
        $comando_sql_inserir->bindParam(':numero', $numero);
        $comando_sql_inserir->bindParam(':uf', $uf);
        $comando_sql_inserir->bindParam(':usuario', $usuario);
        $comando_sql_inserir->bindParam(':senha', $senha);

        try{

          $comando_sql_inserir->execute();
          $_SESSION["msg"] = $nome . " O seu cadastro foi criado com sucesso";
  
          }catch(PDOException $e){
          //ERRO NA CONEXÃO
          $erro = $e->getMessage();
          echo "Erro: $erro";
          }
          header("location:" . $BASE_URL . "../View/Login.php");


     //Atualizando os dados do contato no banco
    }elseif($dados["type"] === "editar"){
        $codcliente = $_SESSION['codigo_do_cliente'];
        $nome = $dados["nome"];
        $telefone =  $dados["telefone"];
        $numero = (int) $dados["numero"];
        $email = $dados["email"];
        $cep =  $dados["cep"];
        $uf = $dados["uf"];
        $cidade = $dados["cidade"];
        $bairro = $dados["bairro"];
        $rua = $dados["rua"];
        $usuario =  $dados["usuario"];
        $senha =  $dados["senha"];
  
        $query = "UPDATE tb_cliente SET  nome = :nome, telefone = :telefone, email = :email, rua = :rua, bairro = :bairro, cidade = :cidade, cep = :cep, numero = :numero, uf = :uf, usuario = :usuario, senha = :senha WHERE codcliente = :codcliente";
  
        $comando_sql_atualizar = $conn->prepare($query);
        $comando_sql_atualizar->bindParam(':nome', $nome);
        $comando_sql_atualizar->bindParam(':telefone', $telefone);
        $comando_sql_atualizar->bindParam(':email', $email);
        $comando_sql_atualizar->bindParam(':rua', $rua);
        $comando_sql_atualizar->bindParam(':bairro', $bairro);
        $comando_sql_atualizar->bindParam(':cidade', $cidade);
        $comando_sql_atualizar->bindParam(':cep', $cep);
        $comando_sql_atualizar->bindParam(':numero', $numero);
        $comando_sql_atualizar->bindParam(':uf', $uf);
        $comando_sql_atualizar->bindParam(':usuario', $usuario);
        $comando_sql_atualizar->bindParam(':senha', $senha);
        $comando_sql_atualizar->bindParam(':codcliente', $codcliente);

        try{
          $comando_sql_atualizar->execute();

          }catch(PDOException $e){
          $erro = $e->getMessage();
          echo "Erro: $erro";
          } 
          
          header("location:" . $BASE_URL . "../View/obrigadoatcadastro.php");

        } 

    //Seleção de dados
}else{



$codcliente = $_SESSION['codigo_do_cliente'];
$query = "SELECT * FROM tb_cliente WHERE codcliente = :codcliente";
$result = $conn->prepare($query);
$result->bindParam(":codcliente", $codcliente); 
$result->execute();

$cliente = $result->fetch();


//RETORNA TODOS OS DADOS
$clientes = [];


$query = "SELECT * FROM tb_cliente WHERE codcliente = :codcliente";
$result = $conn->prepare($query);
$result->bindParam(":codcliente", $codcliente); 
$result->execute();
        
//MOSTRA TODOS OS DADOS POR MEIO DA PDO
$clientes = $result->fetchAll();
}

$conn = null;

?>