<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php $BASE_URL ?>css/Estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>DADOS DO CLIENTE</title>
</head>

<body>
    <div style="background: black;">
        <nav>

            <div class="dropdown">
                <button class="dropbtn">Logar como Funcionario</button>
                <div class="dropdown-content">
                    <a href="acesso_funcionario/index.php">Entrar no sistema</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Logar como Cliente</button>
                <div class="dropdown-content">
                    <a href="acesso_cliente/View/index.php">Entrar no site</a>
                </div>
            </div>
        </nav>
    </div>
    <h1 id="main-title"> </h1>
    <div class="foto_fundo_home">

    </div>
</body>
<h1 id="rodape-title"> </h1>
<?php
    include_once("template/footer.php");
?>
<h1 id="rodape-title"> </h1>