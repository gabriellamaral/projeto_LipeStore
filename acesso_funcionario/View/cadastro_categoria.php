<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_funcionario.php");
?>

<body>
    <div>
        <?php include_once("../template/btnvoltar_funcionario.html"); ?>


        <form name="at_funcionario" action="<?= $BASE_URL ?>../config/processo_categoria.php" method="POST">
            <input type="hidden" name="type" value="editar">
            <input type="hidden" name="codcategoria" value="<?= $categoria["codcategoria"] ?>">

            <div>
                <h1 id="main-title"> Editar Categoria</h1>
            </div>

            <fieldset>
                <div style="padding-left: 320px;">
                    <p>
                        <label for="nome">Nome:</label>
                        <input required type="text" name="nome" value="<?= $funcionario["nome"] ?>" id="nome"
                            size="28.5" maxlength="30" />
                    </p>

                </div>
                <br>
                <button type="submit">Alterar</button>

        </form>
    </div>
</body>
<h1 id="rodape-title"> </h1>
<?php
    include_once("../template/footer.php");
?>
<h1 id="rodape-title"> </h1>