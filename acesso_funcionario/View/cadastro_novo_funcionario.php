<?php
include_once("../config/url.php");
include_once("../config/processo_funcionario.php");

// limpa a mensagem
if(isset($_SESSION['msg'])) {
$printMsg = $_SESSION['msg'];
$_SESSION['msg'] = '';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php $BASE_URL ?>../css/Estilos.css">
    <script type="text/javascript" src="<?php $BASE_URL ?>../JavaScript/script_atualizar.js"></script>
    <script type="text/javascript" src="<?php $BASE_URL ?>../JavaScript/script_cadastrar.js"></script>
    <script type="text/javascript" src="<?php $BASE_URL ?>../JavaScript/script_login.js"></script>
    <script type="text/javascript" src="<?php $BASE_URL ?>../JavaScript/script_pesquisar.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>DADOS DO FUNCIONARIO</title>
</head>

<body>
    <form method="POST" id="id_cadastro_funcionario" name="cadastro_funcionario"
        action="<?= $BASE_URL ?>../config/processo_funcionario.php">

        <input type="hidden" name="type" value="create">

        <div>
            <h1 id="main-title"> CADASTRAMENTO DE FUNCIONARIO</h1>
        </div>

        <fieldset>
            <div style="padding-left: 320px;">
                <p>
                    <label for="nome">Nome:</label>
                    <input required type="text" name="nome" id="id_nome" placeholder="Digite seu nome completo"
                        size="28.5" maxlength="30" />

                    <label class="espaca-esquerda" for="cpf">CPF:</label>
                    <input required type="text" name="cpf" id="id_cpf" placeholder="Digite o seu cpf sem ponto ou traço"
                        size="28" maxlength="11" />
                </p>

                <p>
                    <label for="data_de_nascimento">Data de nascimento:</label>
                    <input required type="date" name="data_de_nascimento" id="id_data_de_nascimento"
                        placeholder="Informe usa data de nascimento">

                </p>

                <p>
                    <label for="cep">CEP:</label>
                    <input required type="text" name="cep" id="id_cep" placeholder="Digite o seu CEP" size="12"
                        maxlength="8" />

                    <label class="espaca-esquerda" for="uf">Estado:</label>
                    <select name="uf" id="id_uf_funcionario">
                        <option value="ES">Espírito Santo</option>
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
                    <input required type="text" name="cidade" id="id_cidade" placeholder="Informe a sua cidade"
                        size="27" maxlength="25" />
                </p>
                <p>
                    <label for="bairro">Bairro:</label>
                    <input required type="text" name="bairro" id="id_bairro" placeholder="Informe o seu bairro"
                        size="25" maxlength="25" />

                    <label for="rua">Rua:</label>
                    <input required type="text" name="rua" id="id_rua" placeholder="Informe a sua rua" size="36"
                        maxlength="50" />
                </p>

                <p>
                    <label for="usuario">login:</label>
                    <input required type="text" name="usuario" id="id_usuario" placeholder="Informe o seu login"
                        size="28.5" maxlength="50" />

                    <label class="espaca-esquerda" for="senha">Senha:</label>
                    <input required type="password" name="senha" id="id_senha" placeholder="Informe a sua senha"
                        size="28.5" maxlength="50" />
                </p>
            </div>
            <br>
            <input type="submit" value="cadastrar" onclick="cadastrar_funcionario(this.value)" />

            <input class="espaca-esquerda" type="reset" value="Limpar dados" />
        </fieldset>
    </form>
</body>
<h1 id="rodape-title"> </h1>
<?php 
include_once "../template/footer.php";
?>
<h1 id="rodape-title"> </h1>