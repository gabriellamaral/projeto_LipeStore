<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_cliente.php");
?>

<body>
    <div>
        <?php include_once("../template/btnvoltar_cliente.html"); ?>


        <form name="at_cliente" action="<?= $BASE_URL ?>../config/processo_tamanho.php" method="POST">
            <input type="hidden" name="type" value="editar">
            <input type="hidden" name="codtamanho" value="<?= $tamanho["codtamanho"] ?>">

            <div>
                <h1 id="main-title"> Editar Tamanho</h1>
            </div>

            <fieldset>
                <div style="padding-left: 320px;">
                    <p>
                        <label for="tamanho">Nome:</label>
                        <input required type="text" name="tamanho" value="<?= $tamanho["nome"] ?>" id="tamanho" size="28.5"
                            maxlength="30" />
                    </p>
                </div>
                <br>
                <button type="submit">Atualizar</button>

        </form>
    </div>
</body>
<h1 id="rodape-title"> </h1>
<?php
    //incluindo o template do rodapé
    include_once("../template/footer.php");
?>
<h1 id="rodape-title"> </h1>