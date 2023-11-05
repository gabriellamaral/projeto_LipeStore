<?php 
include_once ("../template/header_funcionario.php");
include_once("../config/conexao.php");
?>

<div id="container">
    <h1 id="main-title">ATUALIZAÇÃO DE DADOS DO FUNCIONARIO</h1>
    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?=$printMsg?></p>
    <?php endif; ?>

    <?php if (count($funcionarios)> 0): ?>
    <table class="table" id="update-tabela">
        <thead>
            <!-- Cabeçalho da tabela-->
            <tr>
                <th scope="col">#</th> <!-- Cabeçalho da tabela-->
                <th scope="col">Cpf</th>
                <th scope="col">Nome</th>
                <th scope="col">Usuario</th>
                <th style="color: blue; font-weight: bolder; font-size: larger;" scope="col">COMANDOS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td scope="row" class="col_id"><?= $funcionario["codfuncionario"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["cpf"] ?></td>
                <td scope="row"><?= $funcionario["nome"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["usuario"] ?></td>
                <td class="actions">
                    <a
                        href="<?= $BASE_URL ?>pesquisa_funcionario.php?codfuncionario=<?= $funcionario["codfuncionario"] ?>">
                        <i class="fas fa-eye check-icon"></i></a>
                    <a
                        href="<?= $BASE_URL ?>alterar_dados_funcionario.php?codfuncionario=<?= $funcionario["codfuncionario"] ?>">
                        <i class="fas fa-edit edit-icon"></i></a>

                    <a href="<?= $BASE_URL ?>cadastro_funcionario.php">
                        <i class="far fa-plus adit-icon"></i></a>

                    <form class="delete-form" action="<?= $BASE_URL ?>../config/processo_funcionario.php" method="POST">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="codfuncionario" value="<?= $funcionario["codfuncionario"] ?>">
                        <!--CRIANDO UMA FUNÇÃO JAVA SCRIP PARA CONFIRMAR SE VOCE QUER EXCLUIR UM CONTATO--->
                        <button type="submit" class="btn-deletar"
                            onclick="return confirm('TEM CERTEZA QUE DESEJA EXCLUIR ESTE FUNCIONARIO? ')">
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
    <p id="empty-list-text">Ainda não existem funcionarios cadastrados
        <a href="<?php $BASE_URL?>cadastro_funcionario.php">
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