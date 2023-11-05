<?php 
include_once ("../template/header_pedido.php");
include_once("../config/conexao.php");
?>

<div id="container">
    <h1 id="main-title">TELA DE ATUALIZAÇÃO DE DADOS DO PEDIDO</h1>
    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?=$printMsg?></p>
    <?php endif; ?>

    <?php if (count($pedidos)> 0): ?>
    <table class="table" id="update-tabela">
        <thead>
            <!-- Cabeçalho da tabela-->
            <tr>
                <th scope="col">#</th> <!-- Cabeçalho da tabela-->
                <th scope="col">Numero da nota</th>
                <th scope="col">Data da emissão</th>
                <th scope="col">Código do cliente</th>
                <th style="color: blue; font-weight: bolder; font-size: larger;" scope="col">COMANDOS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td scope="row" class="col_id"><?= $pedido["codpedido"] ?></td>
                <td scope="row" class="col_id"><?= $pedido["data_emissão"] ?></td>
                <td scope="row"><?= $pedido["codigo_cliente"] ?></td>
                
                <td class="actions">
                    <a
                        href="<?= $BASE_URL ?>pesquisa_pedido.php?codpedido=<?= $pedido["codpedido"] ?>">
                        <i class="fas fa-eye check-icon"></i></a>
                    <a
                        href="<?= $BASE_URL ?>alterar_dados_pedido.php?codpedido=<?= $pedido["codpedido"] ?>">
                        <i class="fas fa-edit edit-icon"></i></a>

                    <a href="<?= $BASE_URL ?>cadastro_pedido.php">
                        <i class="far fa-plus adit-icon"></i></a>

                    <form class="delete-form" action="<?= $BASE_URL ?>../config/processo_pedido.php" method="POST">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="codpedido" value="<?= $pedido["codpedido"] ?>">
                        <!--CRIANDO UMA FUNÇÃO JAVA SCRIP PARA CONFIRMAR SE VOCE QUER EXCLUIR UM CONTATO--->
                        <button type="submit" class="btn-deletar"
                            onclick="return confirm('TEM CERTEZA QUE DESEJA EXCLUIR ESTE pedido? ')">
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
    <!-- Se o contatos for inferior a 0 entao noa existe registros na tabela e vou direcionar o pedido para aba de cadastramento-->
    <?php else: ?>
    <p id="empty-list-text">Ainda não existem pedidos cadastrados
        <a href="<?php $BASE_URL?>cadastro_pedido.php">
            CLIQUE AQUI PARA ADICIONAR UM NOVO CONTATO
        </a>
    </p>
    <!-- Fechei o if-->
    <?php endif; ?>
</div>

<?php 
include_once "../template/footer.php";
?>