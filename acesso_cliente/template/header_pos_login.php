<?php
include_once("../config/url.php");
include_once("../config/processo_cliente.php");

// limpa a mensagem
if(isset($_SESSION['msg'])) {
$printMsg = $_SESSION['msg'];
$_SESSION['msg'] = '';
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>  

   <meta charset="utf-8">

   <title> LIPE STORE</title>
   <link rel="shortcut icon" href="../imagens/logo_lipestore_reduzida.jpg" type="image/x-icon">
   <link rel="stylesheet" href="../css/Estilos.css">
</head>

<body>
  <nav>
    <ul id="menuindex" >
      <li><a href="Index.php" > INICIO </a></li>
      <li><a href="sobre.php" > SOBRE A EMPRESA </a></li>
      <li><a href="Produtos.php" > TODOS OS PRODUTOS </a></li>
      <li><a href="FaleConosco.php" > FALE CONOSCO </a></li>
      <li><a href="/prj_LipeStore/index.php">VOLTAR AO INICIO DO PROJETO</a></li>

     <ul class="menu">
          <li> <a href="#">ÁREA DO CLIENTE</a> 
               <ul>
                      <li><a href="../config/processo_sair_login.php">SAIR</a></li>
                      <li><a href="atualizar_cadastro.php">ATUALIZAR DADOS</a></li>
                      <li><a href="carrinho.php">CARRINHO</a></li>
                      <li><a href="atualizar_pedidos.php">ATUALIZAR UM PEDIDO</a></li>
                      <li><a href="historico_de_compras.php">HISTORICO DE COMPRAS</a></li>
               </ul>
        </li>
   </ul>
    </ul>
  </nav>
  </body>
