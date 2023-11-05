<?php
include_once("../config/url.php");
include_once("../config/processo_funcionario.php");

// limpa a mensagem
if(isset($_SESSION['msg'])) {
$printMsg = $_SESSION['msg'];
$_SESSION['msg'] = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php $BASE_URL ?>../css/Estilos.css">
    <script type="text/javascript" src="<?php $BASE_URL ?>../JavaScript/script_atualizar.js"></script>
    <script type="text/javascript" src="<?php $BASE_URL ?>../JavaScript/script_cadastrar.js"></script>
    <script type="text/javascript" src="<?php $BASE_URL ?>../JavaScript/script_login.js"></script>
    <script type="text/javascript" src="<?php $BASE_URL ?>../JavaScript/script_pesquisar.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>DADOS DO FUNCIONARIO</title>
</head>

<body>
    <div style="background: black;">
        <nav>

            <div class="dropdown">
                <button class="dropbtn">NOVO CADASTRO</button>
                <div class="dropdown-content">
                    <a href="cadastro_cliente.php">CLIENTE</a>
                    <a href="cadastro_produto.php">PRODUTO</a>
                    <a href="cadastro_pedido.php">PEDIDO</a>
                    <a href="cadastro_funcionario.php">FUNCIONARIO</a>
                    <a href="cadastro_tamanho.php">TAMANHO</a>
                    <a href="cadastro_categoria.php">CATEGORIA</a>
                    <a href="cadastro_cor.php">COR</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">VISUALIZAR DADOS</button>
                <div class="dropdown-content">
                    <a href="dados_cliente.php">CLIENTES</a>
                    <a href="dados_produto.php">PRODUTOS</a>
                    <a href="dados_pedido.php">PEDIDOS</a>
                    <a href="dados_funcionario.php">FUNCIONARIOS</a>
                    <a href="dados_tamanho.php">TAMANHOS</a>
                    <a href="dados_categoria.php">CATEGORIAS</a>
                    <a href="dados_cor.php">COR</a>
                </div>
            </div>

            <div class="dropdown">
                    <button class="dropbtn">VOLTAR AO INICIO DO PROJETO</button>
                    <div class="dropdown-content">
                        <a href="/prj_LipeStore/index.php">VOLTAR</a>
               </div>
        </nav>
    </div>
</body>