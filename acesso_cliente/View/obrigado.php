<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_cliente.php");
?>
<?php if(isset($printMsg) && $printMsg != ''): ?>
<p id="msg"><?=$printMsg?></p>
<?php endif; ?>

<hr class="linha-amarela" hr>
<h1> Obrigado por está ingressando no nosso site</h1>
<P class="fundobranco"> Agora você poderá está comprando os melhores produtos de ponta do mercado.<br>
    Agora verifique os nossos produtos e faça já a sua compra</p>

<h1 id="rodape-title"> </h1>
<?php 
include_once "../template/footer.php";
?>
<h1 id="rodape-title"> </h1>