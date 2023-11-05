<?php 
include_once ("../template/header_cliente.php");
include_once("../config/conexao.php");
?>

<div id="container">

    <h1 id="main-title">ATUALIZAÇÃO DE DADOS DO CLIENTE</h1>
    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?=$printMsg?></p>
    <?php endif; ?>

    <?php if (count($clientes)> 0): ?>
    <table class="table" id="update-tabela">
        <thead>
            <!-- Cabeçalho da tabela-->
            <tr>
                <th scope="col">#</th> <!-- Cabeçalho da tabela-->
                <th scope="col">Cpf</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th style="color: blue; font-weight: bolder; font-size: larger;" scope="col">COMANDOS</th>
            </tr>
        </thead>
        <tbody>
            <!-- preciso trabalhar com forit para pegar os dados da tabela-->
            <?php foreach ($clientes as $cliente): ?>
            <!-- agora vou trazer os dados da tabela-->
            <tr>
                <!-- cada linha que vai consumir a minha tabela-->
                <td scope="row" class="col_id"><?= $cliente["codcliente"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["cpf"] ?></td>
                <td scope="row"><?= $cliente["nome"] ?></td>
                <td scope="row"><?= $cliente["telefone"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["email"] ?></td>
                <!--INSERINDO OS BOTOES --->
                <td class="actions">

                    <a href="<?= $BASE_URL ?>pesquisa_cliente.php?codcliente=<?= $cliente["codcliente"] ?>">
                        <i class="fas fa-eye check-icon"></i></a>

                    <a href="<?= $BASE_URL ?>alterar_dados_cliente.php?codcliente=<?= $cliente["codcliente"] ?>"> <i
                            class="fas fa-edit edit-icon"></i></a>

                    <a href="<?= $BASE_URL ?>cadastro_cliente.php">
                        <i class="far fa-plus adit-icon"></i></a>

                    <form class="delete-form" action="<?= $BASE_URL ?>../config/processo_cliente.php" method="POST">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="codcliente" value="<?= $cliente["codcliente"] ?>">
                        <!--CRIANDO UMA FUNÇÃO JAVA SCRIP PARA CONFIRMAR SE VOCE QUER EXCLUIR UM CONTATO--->
                        <button type="submit" class="btn-deletar"
                            onclick="return confirm('TEM CERTEZA QUE DESEJA EXCLUIR ESTE USUARIO? ')">
                            <!--preciso criar um hiden para dizer que a ação vai ser diferente o nome vai ser delete -->
                            <i class="fas fa-times delete-icon"></i>
                        </button>
                    </form>
                    <!-- agora vou no css fazer o estilo-->
                </td>
            </tr>
            <!--- Fechando o foreach-->
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Se o contatos for inferior a 0 entao noa existe registros na tabela e vou direcionar o funcionario para aba de cadastramento-->
    <?php else: ?>
    <p id="empty-list-text">Ainda não existem Contatos cadastrados
        <a href="<?php $BASE_URL?>cadastro_cliente.php">
            CLIQUE AQUI PARA ADICIONAR UM NOVO CONTATO
        </a>
    </p>
    <!-- Fechei o if-->
    <?php endif; ?>
</div>
<h1 id="rodape-title"> </h1>
<?php 
include_once "../template/footer.php";
?>
<h1 id="rodape-title"> </h1>