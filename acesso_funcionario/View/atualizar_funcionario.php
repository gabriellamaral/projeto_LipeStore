<?php 
include_once "../template_padrao/header_atualizar_funcionario.php";
?>

<div id="container"> 

<?php if(isset($printMsg) && $printMsg != ''): ?>
<p id="msg"><?=$printMsg?></p>
<?php endif; ?>

<h1 id="main-title">ATUALIZAR DADOS DO FUNCIONARIO</h1>


<?php if (count($funcionarios)> 0): ?>
<table class="table" id="update-tabela">
    <thead> <!-- Cabeçalho da tabela-->
     <tr>
        <th scope="col">#</th> <!-- Cabeçalho da tabela-->
        <th scope="col">Cpf</th>
        <th scope="col">Nome</th>
        <th scope="col">Data de Admissão</th>
        <th scope="col">Data de nascimento</th>
        <th scope="col">Rua</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">Cep</th>
        <th scope="col">uf</th>
        <th scope="col">Usuario</th>
        <th scope="col">Senha</th>
        <th scopre="col"></th>
     </tr>
    </thead>
    <tbody>
        <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td scope="row" class="col_id"><?= $funcionario["codfuncionario"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["cpf"] ?></td>
                <td scope="row"><?= $funcionario["nome"] ?></td>
                <td scope="row"><?= $funcionario["data_de_admissao"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["data_de_nascimento"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["rua"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["bairro"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["cidade"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["cep"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["uf"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["usuario"] ?></td>
                <td scope="row" class="col_id"><?= $funcionario["senha"] ?></td>
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