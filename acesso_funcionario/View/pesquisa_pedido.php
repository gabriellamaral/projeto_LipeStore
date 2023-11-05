<?php
include_once("../template/header_pedido.php");
?>
<?php include_once("../template/btnvoltar_pedido.html"); ?>

<h1 id="main-title">Segue abaixo os dados do pedido <br> <?= $pedido["nome"] ?></h1>
<fieldset>
    <p> <b>Código do pedido:</b> <?= $pedido["codigo_de_pedido"] ?></p>
    <p> <b>Data de emissão:</b> <?= $pedido["data_de_emissao"] ?></p>
    <p> <b>Código do cliente/pedido:</b> <?= $pedido["codigo_do_cliente_pedido"] ?></p>
    
</fieldset>
<h1 id="rodape-title"> </h1>
<?php
include_once("../template/footer.php");
?>
<h1 id="rodape-title"> </h1>