<?php
include_once("../template/header_cliente.php");
?>
<?php include_once("../template/btnvoltar_cliente.html"); ?>

<h1 id="main-title">Segue abaixo os dados do cliente <br> <b> <?= $cliente["nome"] ?> </b> </h1>
<p> <b>Cpf: </b> <?= $cliente["cpf"] ?></p>
<p> <b>telefone: </b> <?= $cliente["telefone"] ?></p>
<p> <b>Email: </b> <?= $cliente["email"] ?></p>
<p> <b>Rua: </b> <?= $cliente["rua"] ?></p>
<p> <b>Bairro: </b> <?= $cliente["bairro"] ?></p>
<p> <b>Cidade: </b> <?= $cliente["cidade"] ?></p>
<p> <b>Cep: </b> <?= $cliente["cep"] ?></p>
<p> <b>Numero de residencia: </b> <?= $cliente["numero"] ?></p>
<p> <b>Estado: </b> <?= $cliente["uf"] ?></p>
<p> <b>Usuario: </b><?= $cliente["usuario"] ?></p>
<p> <b>Senha: </b><?= $cliente["senha"] ?></p>
<h1 id="rodape-title"> </h1>
<?php
include_once("../template/footer.php");
?>
<h1 id="rodape-title"> </h1>