<?php
include_once "config/url.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="<?php $BASE_URL ?>css/Login.css">
    <script type="text/javascript" src="<?php $BASE_URL ?>JavaScript/script_login.js"></script>

    <title>TELA INICIAL</title>
</head>

<body>

    <main class="container">
         <a href="/prj_LipeStore/index.php">VOLTAR</a>
         <br>
         <br>
        <p>BEM VINDO AO NOSSO SISTEMA</p>
     
           

        <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>
        <h1>Login</h1>
        <br>

        <form method="POST" id="id_login" name="login" action="<?= $BASE_URL ?>config/processo_login.php">
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
            <button><a href="View/cadastro_novo_funcionario.php">Criar o meu cadastro</a></button>
        </form>
    </main>
</body>

</html>