<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_pedido.php");
?>

<body>
    <div>
    <?php include_once("../template/btnvoltar_pedido.html"); ?>


        <form name="at_pedido" action="<?= $BASE_URL ?>../config/processo_pedido.php" method="POST">
            <input type="hidden" name="type" value="editar">
            <input type="hidden" name="codpedido" value="<?= $pedido["codpedido"] ?>">

            <div>
                <h1 id="main-title"> Editar pedido</h1>
            </div>

            <fieldset >
                <div style="padding-left: 320px;">
                    <p>
                        <label for="codpedido">códigp pedido:</label>
                        <input required type="text" name="codpedido" value="<?= $pedido["codpedido"] ?>" id="codpedido"
                            size="28.5" maxlength="30" />
                    </p>

                    <p>
                        <label for="data_emissao">Data de Emissão:</label>
                        <input required type="date" name="data_de_emissao" id="data_de_emissao"
                            value="<?= $pedido["data_de_emissao"] ?>" size="30" maxlength="11">
                    </p>
                    
                      <p>
                        <label for="cod_clie_pedido">Código do cliente/pedido:</label>
                        <input required type="text" name="cod_clie_pedido" id="cod_clie_pedido" value="<?= $pedido["cod_clie_pedido"] ?>" size="12"
                            maxlength="8" />
                      
                </div>
                <br>
                <button type="submit">Atualizar</button>

        </form>
    </div>
</body>
<?php
    include_once("../template/footer.php");
?>