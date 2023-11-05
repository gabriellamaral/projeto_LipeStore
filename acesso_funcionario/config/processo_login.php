<?php
session_start();

if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    include_once("conexao.php");
    include_once("url.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $validar = "SELECT * FROM tb_funcionario WHERE usuario = :usuario AND senha = :senha";
    $validar = $conn->prepare($validar);
    $validar->bindValue("usuario", $usuario);
    $validar->bindValue("senha", $senha);
    $validar->execute();

    if($validar->rowCount() > 0){
        $dado = $validar->fetch();

        $_SESSION['codigo_do_funcionario'] = $dado['codfuncionario'];
        header("location:" . $BASE_URL . "../View/home.php");

    } else{
    header("location:" . $BASE_URL . "../index.php");
    }
} else{
    header("location:" . $BASE_URL . "../index.php");
 }

 /* para chamar a variavel de sessão eu uso isso <?=$_SESSION['codigo_do_funcionario'] ?>*/
?>