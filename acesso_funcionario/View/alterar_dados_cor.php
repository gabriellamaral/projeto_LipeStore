<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_cor.php");
?>

<body>
    <div>
       
        <form name="at_cor" action="<?= $BASE_URL ?>../config/processo_cor.php" method="POST">
            <input type="hidden" name="type" value="editar">
            <input type="hidden" name="codcor" value="<?= $cor["codcor"] ?>">

            <div>
                <h1 id="main-title"> Alterar Cor</h1>
            </div>

            <fieldset>
                <div style="padding-left: 320px;">
                    <p>
                        <label for="nome">Cor:</label>
                        <input required type="text" name="nome" value="<?= $cor["nome"] ?>" id="nome" size="28.5"
                            maxlength="30" />

                    </p>

                </div>
                <br>
                <button type="submit">Atualizar Cor</button>

        </form>
    </div>
</body>
<h1 id="rodape-title"> </h1>
<?php
    //incluindo o template do rodapé
    include_once("../template/footer.php");
?>
<h1 id="rodape-title"> </h1>