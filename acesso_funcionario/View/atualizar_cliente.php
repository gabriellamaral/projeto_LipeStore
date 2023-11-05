<?php 
include_once "../template_padrao/header_atualizar_cliente.php";
?>

<div id="container"> 

<?php if(isset($printMsg) && $printMsg != ''): ?>
<p id="msg"><?=$printMsg?></p>
<?php endif; ?>

<h1 id="main-title">ATUALIZAR DADOS DO CLIENTE</h1>


<?php if (count($clientes)> 0): ?>
<table class="table" id="update-tabela">
    <thead> <!-- Cabeçalho da tabela-->
     <tr>
        <th scope="col">#</th> <!-- Cabeçalho da tabela-->
        <th scope="col">Cpf</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Email</th>
        <th scope="col">Rua</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">Cep</th>
        <th scope="col">Residencia</th>
        <th scope="col">uf</th>
        <th scope="col">Usuario</th>
        <th scope="col">Senha</th>
        <th scopre="col"></th>
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
                <td scope="row" class="col_id"><?= $cliente["rua"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["bairro"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["cidade"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["cep"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["numero"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["uf"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["usuario"] ?></td>
                <td scope="row" class="col_id"><?= $cliente["senha"] ?></td>
                <!--INSERINDO OS BOTOES --->
                <td class="actions">
                    <a href="#">
                        <i class="fas fa-eye check-icon"></i></a>
                    <a href="#">
                        <i class="fas fa-edit edit-icon"></i></a>
                    <button type="submit" class="btn_deletar">
                        <i class="fas fa-times delete-icon"></i>
                    </button>
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
    <a href="<?php $BASE_URL?>addContato.php">
CLIQUE AQUI PARA ADICIONAR UM NOVO CONTATO
</a>
</p>
<!-- Fechei o if-->
<?php endif; ?>
</div>

<?php 
include_once "../template_padrao/footer.php";
?>