<?php
include_once "../config/url.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title> Logar - LipeStore </title>
    <link rel="shortcut icon" href="../imagens/logo_lipestore_reduzida.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../Estilos CSS/Login.css">
</head>

<body>


    <main class="container">

        <a href="Index.php">Inicio</a>


        <h1>Login</h1>
        <br>

        <form method="POST" id="id_login" name="login" action="<?= $BASE_URL ?>../config/processo_login.php">
            <input type="hidden" name="type" value="logar">
            <div id="loginn">
                <input type="text" required name="usuario" id="usuario" placeholder="Insira seu login">
                <div class="linha1"></div>
            </div>
            <br>
            <div id="senhaa">
                <input type="password" required name="senha" id="usuario" placeholder="Insira sua Senha">
                <div class="linha2"></div>
            </div>

            <input type="submit" value="Entrar">
            <br>
            <button><a href="cadastro.php">Criar o meu cadastro</a></button>
        </form>
    </main>
</body>

</html>