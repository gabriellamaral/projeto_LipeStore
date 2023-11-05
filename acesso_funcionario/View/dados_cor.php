<?php 
include_once ("../template/header_cor.php");
include_once("../config/conexao.php");
?>

<div id="container">

    <h1 id="main-title">ATUALIZAÇÃO DE DADOS DA COR</h1>
    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?=$printMsg?></p>
    <?php endif; ?>

    <?php if (count($cores)> 0): ?>
    <table class="table" id="update-tabela">
        <thead>
            <!-- Cabeçalho da tabela-->
            <tr>
                <th scope="col">#</th> <!-- Cabeçalho da tabela-->
                <th scope="col">Nome</th>       
                <th style="color: blue; font-weight: bolder; font-size: larger;" scope="col">COMANDOS</th>
            </tr>
        </thead>
        <tbody>
            <!-- preciso trabalhar com forit para pegar os dados da tabela-->
            <?php foreach ($cores as $cor): ?>
            <!-- agora vou trazer os dados da tabela-->
            <tr>
                <!-- cada linha que vai consumir a minha tabela-->
                <td scope="row" class="col_id"><?= $cor["codcor"] ?></td>
                <td scope="row"><?= $cor["nome"] ?></td>
            
                <!--INSERINDO OS BOTOES --->
                <td class="actions">

                    <a href="<?= $BASE_URL ?>pesquisa_cor.php?codcor=<?= $cor["codcor"] ?>">
                        <i class="fas fa-eye check-icon"></i></a>

                    <a href="<?= $BASE_URL ?>alterar_dados_cor.php?codcor=<?= $cor["codcor"] ?>"> <i
                            class="fas fa-edit edit-icon"></i></a>

                    <a href="<?= $BASE_URL ?>cadastro_cor.php">
                        <i class="far fa-plus adit-icon"></i></a>

                    <form class="delete-form" action="<?= $BASE_URL ?>../config/processo_cor.php" method="POST">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="codcor" value="<?= $cor["codcor"] ?>">
                        <!--CRIANDO UMA FUNÇÃO JAVA SCRIP PARA CONFIRMAR SE VOCE QUER EXCLUIR UM CONTATO--->
                        <button type="submit" class="btn-deletar"
                            onclick="return confirm('TEM CERTEZA QUE DESEJA EXCLUIR ESTA COR? ')">
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
    <p id="empty-list-text">Ainda não existem cores Cadastradadas.
        <a href="<?php $BASE_URL?>cadastro_cor.php">
            CLIQUE AQUI PARA ADICIONAR UMA NOVA COR
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