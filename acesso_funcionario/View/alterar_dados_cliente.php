<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_cliente.php");
?>

<body>
    <div>
        <?php include_once("../template/btnvoltar_cliente.html"); ?>


        <form name="at_cliente" action="<?= $BASE_URL ?>../config/processo_cliente.php" method="POST">
            <input type="hidden" name="type" value="editar">
            <input type="hidden" name="codcliente" value="<?= $cliente["codcliente"] ?>">

            <div>
                <h1 id="main-title"> Editar Cliente</h1>
            </div>

            <fieldset>
                <div style="padding-left: 320px;">
                    <p>
                        <label for="nome">Nome:</label>
                        <input required type="text" name="nome" value="<?= $cliente["nome"] ?>" id="nome" size="28.5"
                            maxlength="30" />

                    </p>

                    <p>
                        <label for="telefone">Tel/Cel:</label>
                        <input required type="text" name="telefone" id="telefone" value="<?= $cliente["telefone"] ?>"
                            size="30" maxlength="11">

                        <label for="numero">N: Residencia:</label>
                        <input required type="text" name="numero" id="numero" value="<?= $cliente["numero"] ?>" size="2"
                            maxlength="5" />
                    </p>

                    <p>
                        <label for="email">Email:</label>
                        <input required type="email" name="email" id="email" value="<?= $cliente["email"] ?>"
                            size="72" />
                    </p>

                    <p>
                        <label for="cep">CEP:</label>
                        <input required type="text" name="cep" id="cep" value="<?= $cliente["cep"] ?>" size="12"
                            maxlength="8" />

                        <label class="espaca-esquerda" for="uf">Estado:</label>
                        <select name="uf" id="uf">
                            <option value="ES"> Espirito Santo </option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>

                        <label class="espaca-esquerda" for="cidade">Cidade:</label>
                        <input required type="text" name="cidade" id="cidade" value="<?= $cliente["cidade"] ?>"
                            size="27" maxlength="25" />
                    </p>
                    <p>
                        <label for="bairro">Bairro:</label>
                        <input required type="text" name="bairro" id="bairro" value="<?= $cliente["bairro"] ?>"
                            size="25" maxlength="25" />

                        <label for="rua">Rua:</label>
                        <input required type="text" name="rua" id="rua" value="<?= $cliente["rua"] ?>" size="36"
                            maxlength="50" />
                    </p>

                    <p>
                        <label for="login">login:</label>
                        <input required type="text" name="usuario" id="usuario" value="<?= $cliente["usuario"] ?>"
                            size="28.5" maxlength="50" />

                        <label class="espaca-esquerda" for="senha">Senha:</label>
                        <input required type="password" name="senha" id="senha" value="<?= $cliente["senha"] ?>"
                            size="28.5" maxlength="50" />
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