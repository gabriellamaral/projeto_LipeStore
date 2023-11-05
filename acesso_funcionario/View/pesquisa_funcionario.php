<?php
include_once("../template/header_funcionario.php");
?>
<?php include_once("../template/btnvoltar_funcionario.html"); ?>

<h1 id="main-title">Segue abaixo os dados do funcionario <br> <?= $funcionario["nome"] ?></h1>
<fieldset>
    <p> <b>Data de Admissão:</b> <?= $funcionario["data_de_admissao"] ?></p>
    <p> <b>Data de Nascimento:</b> <?= $funcionario["data_de_nascimento"] ?></p>
    <p> <b>Cpf:</b> <?= $funcionario["cpf"] ?></p>
    <p> <b>Rua: </b> <?= $funcionario["rua"] ?></p>
    <p> <b>Bairro:</b> <?= $funcionario["bairro"] ?></p>
    <p> <b>Cidade:</b> <?= $funcionario["cidade"] ?></p>
    <p> <b>Cep:</b> <?= $funcionario["cep"] ?></p>
    <p> <b>Estado:</b> <?= $funcionario["uf"] ?></p>
    <p> <b>Usuario:</b> <?= $funcionario["usuario"] ?></p>
    <p> <b>Senha:</b> <?= $funcionario["senha"] ?></p>
</fieldset>
<h1 id="rodape-title"> </h1>
<?php
include_once("../template/footer.php");
?>
<h1 id="rodape-title"> </h1>