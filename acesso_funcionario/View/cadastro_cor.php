<?php 
include_once ("../template/header_cor.php");

?>

<body>
    <form method="POST" id="id_cadastro_cor" name="cadastro_cor"
        action="<?= $BASE_URL ?>../config/processo_cor.php">

        <input type="hidden" name="type" value="create">

        <div>
            <h1 id="main-title"> CADASTRO DE COR</h1>
        </div>

        <fieldset>
            <div style="padding-left: 320px;">
                <p>
                    <label for="cor">Cor:</label>
                    <input required type="text" name="nome" id="id_cor" placeholder="Adicione uma Cor"
                        size="28.5" maxlength="30" />

                </p>
            </div>

            <br>

            <input type="submit" value="cadastrar" onclick="cadastrar_cor(this.value)" />

            <input class="espaca-esquerda" type="reset" value="Limpar dados" />
        </fieldset>

    </form>

</body>
<h1 id="rodape-title"> </h1>
<?php 
include_once "../template/footer.php";
?>
<h1 id="rodape-title"> </h1>