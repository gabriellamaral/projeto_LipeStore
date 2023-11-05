<?php 
include_once "../template/header_pedido.php";

?>

<body>
    <form method="POST" id="id_cadastro_pedido" name="cadastro_pedido"
        action="<?= $BASE_URL ?>../config/processo_pedido.php">

        <input type="hidden" name="type" value="create">

        <div>
            <h1 id="main-title"> CADASTRO DE PEDIDO</h1>
        </div>

        <fieldset>
            <div style="padding-left: 320px;">
                <p>
                    <label for="codpedido">Numero do pedido:</label>
                    <input required type="text" name="pedido" id="id_pedido" placeholder="**"
                        size="28.5" maxlength="30" />

                </p>
            </div>
            <div style="padding-left: 320px;">
                <p>
                    <label for="cod_clie_pedi">Cliente:</label>
                    <input required type="text" name="pedido" id="id_pedido" placeholder="**"
                        size="28.5" maxlength="30" />

                </p>
            </div>
            
            

            <br>

            <input type="submit" value="cadastrar pedido" onclick="cadastrar_pedido(this.value)" />

            <input class="espaca-esquerda" type="reset" value="Limpar dados" />
        </fieldset>

    </form>

</body>
<h1 id="rodape-title"> </h1>
<?php 
include_once "../template/footer.php";
?>
<h1 id="rodape-title"> </h1>