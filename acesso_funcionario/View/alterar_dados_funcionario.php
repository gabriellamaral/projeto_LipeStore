    <?php
    //incluindo o template do cabeçalho
    include_once("../template/header_funcionario.php");
?>

<body>
    <div>
        <?php include_once("../template/btnvoltar_funcionario.html"); ?>


        <form name="at_funcionario" action="<?= $BASE_URL ?>../config/processo_funcionario.php" method="POST">
            <input type="hidden" name="type" value="editar">
            <input type="hidden" name="codfuncionario" value="<?= $funcionario["codfuncionario"] ?>">

            <div>
                <h1 id="main-title"> Editar Funcionario</h1>
            </div>

            <fieldset>
                <div style="padding-left: 320px;">
                    <p>
                        <label for="nome">Nome:</label>
                        <input required type="text" name="nome" value="<?= $funcionario["nome"] ?>" id="nome"
                            size="28.5" maxlength="30" />
                    </p>

                    <p>
                        <label for="telefone">Data de nascimento:</label>
                        <input required type="date" name="data_de_nascimento" id="data_de_nascimento"
                            value="<?= $funcionario["data_de_nascimento"] ?>" size="30" maxlength="11">
                    </p>

                    <p>
                        <label for="cep">CEP:</label>
                        <input required type="text" name="cep" id="cep" value="<?= $funcionario["cep"] ?>" size="12"
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
                        <input required type="text" name="cidade" id="cidade" value="<?= $funcionario["cidade"] ?>"
                            size="27" maxlength="25" />
                    </p>
                    <p>
                        <label for="bairro">Bairro:</label>
                        <input required type="text" name="bairro" id="bairro" value="<?= $funcionario["bairro"] ?>"
                            size="25" maxlength="25" />

                        <label for="rua">Rua:</label>
                        <input required type="text" name="rua" id="rua" value="<?= $funcionario["rua"] ?>" size="36"
                            maxlength="50" />
                    </p>

                    <p>
                        <label for="login">login:</label>
                        <input required type="text" name="usuario" id="usuario" value="<?= $funcionario["usuario"] ?>"
                            size="28.5" maxlength="50" />

                        <label class="espaca-esquerda" for="senha">Senha:</label>
                        <input required type="password" name="senha" id="senha" value="<?= $funcionario["senha"] ?>"
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
    include_once("../template/footer.php");
?>
<h1 id="rodape-title"> </h1>