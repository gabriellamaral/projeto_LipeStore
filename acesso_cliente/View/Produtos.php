<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_padrao.php");
?>


<hr>
<h1>
    <center>CONFIRA OS NOSSOS PRODUTOS</center>
</h1>
<hr>

<form style="background: white; padding: 10px;">
    <center>
        <div id="pesquisa-box">
            <input type="text" id="pesquisa-txt" placeholder="O que você está buscando?">
            <a href="#" id="pesquisa-btn"></a>
        </div>
    </center>
</form>
<hr>
<div style="text-align: left; border: thin solid black; background-color: aliceblue;">
    <form>
        <!-- Aba de pesquisa-->

        <p>
            Cores:
            <select>
                <option value=""> Nenhuma </option>
                <option value="rosa"> rosa </option>
                <option value="preto"> preto </option>
                <option value="azul"> azul </option>
                <option value="verde"> verde </option>
                <option value="vermelho"> vermelho</option>
            </select> Tamanhos:
            <select>
                <option value=""> Nenhuma </option>
                <option value="P"> P </option>
                <option value="M"> M </option>
                <option value="G"> G </option>
                <option value="GG"> GG </option>
                <option value="Unico"> Único</option>
            </select> Categorias:
            <select>
                <option value=""> Nenhuma </option>
                <option value="camisa"> Camisa </option>
                <option value="calca"> Calça </option>
                <option value="tenis"> Tênis</option>
                <option value="jaqueta"> Jaqueta </option>
                <option value="acessorio"> Acessórios</option>
            </select> Valores:
            <select>
                <option value=""> Nenhuma </option>
                <option value="50_reais"> ATÉ R$50.00 </option>
                <option value="100_reais"> ATÉ R$100.00 </option>
                <option value="200_reais"> ATÉ R$200.00</option>
                <option value="200_reais_mais"> ACIMA R$200.00</option>
            </select>


            <input class="espaca-esquerda" type="submit" value="Filtrar" />
            <input class="espaca-esquerda" type="reset" value="Limpar filtro" />
        </p>
    </form>
</div>

<selection>
    <div class="produtos-roupas">
        <div class="itens">
            <img src="../Produtos Imagens/argentina.png" alt="camisa da argentina" border="1px" ; width="290px"
                height=" 340px">
            <p>Camisa de time Argentina</p>
            <h5>R$120,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>


        <div class="itens">
            <img src="../Produtos Imagens/França.png" alt="camisa da França" border="1px" ; width="290px"
                height=" 340px">
            <p>Camisa de time França</p>
            <h5>R$120,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>

        <div class="itens">
            <img src="../Produtos Imagens/Liverpol azul e branca.png" alt="camisa do Liverpol" border="1px" ;
                width="290px" height=" 340px">
            <p>Camisa de time Liverppl</p>
            <h5>R$120,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>

        <div class="itens">
            <img src="../Produtos Imagens/relogio azul.png" alt="relógio Azul" border="1px" ; width="290px"
                height=" 340px">
            <p>Relógio azul</p>
            <h5>R$100,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>

        <div class="itens">
            <img src="../Produtos Imagens/relogio dourado.png" alt="Relógio Dourado" border="1px" ; width="290px"
                height=" 340px">
            <p>Relógio Dourado</p>
            <h5>R$100,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>

        <div class="itens">
            <img src="../Produtos Imagens/relogio de prata.png" alt="Relógio de Prata" border="1px" ; width="290px"
                height=" 340px">
            <p>Relógio de Prata</p>
            <h5>R$100,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>


        <div class="itens">
            <img src="../Produtos Imagens/tenis adidas branco.png" alt="tenis Adidas" border="1px" ; width="290px"
                height=" 340px">
            <p>Tenis Masculino Adidas</p>
            <h5>R$200,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>


        <div class="itens">
            <img src="../Produtos Imagens/Tenis azul e branco.png" alt="Tenis Azul e Branco" border="1px" ;
                width="290px" height=" 340px">
            <p>Tenis Masculino Azul e Branco</p>
            <h5>R$200,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>


        <div class="itens">
            <img src="../Produtos Imagens/tenis fila brnaco.png" alt="Tenis Fila" border="1px" ; width="290px"
                height=" 340px">
            <p>Tenis Masculjno da Fila</p>
            <h5>R$200,00</h5>
            <a href="carrinho.php">
                <img src="../imagens/carrinho.png" width="23px"></a>
        </div>

    </div>
    <!--produtos-roupas-->
    </section>

    <br>

    <h1 id="rodape-title"> </h1>
    <?php 
include_once "../template/footer.php";
?>
    <h1 id="rodape-title"> </h1>