<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_padrao.php");
?>


<hr>
<h1>
    <center>PORTAL DE ATENDIMENTO</center>
</h1>
<hr>
<main>
    <section>
        <header>
            <h2 class="fonte_dourada">
                CADASTROS </h2>
        </header>
        <div>
            <ul>
                <li>Para efetuar um novo login para acessar a aba login no canto superior direito, clicar em novo
                    cadastro, preencher os dados e enviar</li><br>
                <li>Cadastrar produtos novos basta abrir a aba de produtos, clicar no que voce deseja e adicionar ao
                    carrinho</li>
            </ul>
        </div>
    </section>

    <aside>
        <header>
            <h2 class="fonte_dourada">
                DEVOLUÇÃO
            </h2>
        </header>
        <div>
            <ul>
                <li>Nós enviaremos as nossas promoções via whatsapp para todos os clientes cadastrados</li><br>
                <li>A devolução precisa ser feita atraves dos próprios correiros, embalando as peças e nos enviando
                    Assim que recebemos a peça, nós enviamos imediamente a peça do seu agrado ou efetuamos o estorno do
                    dinheiro, o que for da sua preferencia</li>
            </ul>
        </div>
    </aside>
</main>

<main>
    <section>
        <header>
            <h2 class="fonte_dourada">
                COMPRAS </h2>
        </header>
        <div>
            <ul>
                <li>Você deve ir no produto que deseja, escolher as especificações, se possível utilize o filtro para
                    facilitar na hora de encontrar o que deseja, <br> adicionar o produto escolhido ao carrinho ,
                    acessar o carrinho e clicar em finalizar o pedido.</li>
            </ul>
            </ul>
        </div>
    </section>

    <aside>
        <header>
            <h2 class="fonte_dourada">
                ENTREGAS </h2>
        </header>
        <div>
            <ul>
                <li> Nós realizamos entregas para o brasil todo independente da sua localização.</li> <br>
                <li> As entregas são feitas via correios com o prazo de no máximo 15 dias para outros estados, e 7 dias
                    para o estado de Espirito Santo.</li>
            </ul>
        </div>
    </aside>
</main>

<main>
    <section>
        <header>
            <h2 class="fonte_dourada"> CONTATOS </h2>
        </header>
        <div>
            <ul>
                <li> Para entrar em contato conosco basta acessar as nossas redes sociais que estão no final da página.
                    Temos uma equipe com suporte 24h por dia especializada em lhe atender da melho forma e qualidade
                    possivel.</li>
            </ul>
            </ul>
        </div>
    </section>

    <aside>
        <header>
            <h2 class="fonte_dourada">CANCELAMENTOS</h2>
        </header>
        <div>
            <ul>
                <li>Para cancelar um dado do produto voce vai no seu histórico, ultimo produto que voce comprou e aperta
                    em apagar os registros da lista.</li>
            </ul>
        </div>
    </aside>
</main>


<main>
    <section>
        <header>
            <h2 class="fonte_dourada"> PROMOÇÕES </h2>
        </header>
        <div>
            <ul>
                <li>Nós enviaremos as nossas promoções via whatsapp para todos os clientes cadastrados</li>
            </ul>
            </ul>
        </div>
    </section>

    <aside>
        <header>
            <h2 class="fonte_dourada"> REEMBOLSO </h2>
        </header>
        <div>
            <ul>
                <li>O reembolso precisa ser feito via contato conosco ou via caixa de respostas logo abaixo, o estorno
                    acontece até no máximo de 7 dias. </li>
            </ul>
        </div>
    </aside>
</main>
<h1>
    <center>DEIXEM SUAS SUJESTÕES E AVALIAÇÕES</center>
</h1>
<div class="contatos">
    <p>
        Olá, tudo bem? caso Caso deseja entrar em contato conosco para tirar quaisquer duvidas que não foram listadas
        acima, basta preencher os campos abaixo ou nos contatar atraves das redes sociais logo no final da página
        responderemos o mais rápido possivel, obrigado.</p>
    <br>
    <br>
    <form method="post" id="contato" action="feedback.php">
        <p style="text-align: center;">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="id_nome" placeholder="Digite seu Nome" required>
        </p>

        <p style="text-align: center;">
            <label for="email">E-mail: </label>
            <input type="text" name="email " id="id_email" placeholder="Informe o seu email">
        </p>

        <p style="text-align: center;">
            <label for="assunto">Assunto a tratar: </label>
            <select>
                <option value=""> Nenhuma </option>
                <option value="Reclamacao"> Reclamação </option>
                <option value="Sugestao"> Sugestão </option>
                <option value="Prosposta"> Prosposta </option>
                <option value="Avaliacao"> Avaliação </option>
                <option value="Pedidos"> Pedidos </option>
                <option value="Duvidas"> Duvidas </option>
                <option value="Reembolso"> Reembolso </option>
                <option value="Devolucao"> Devolução </option>
                <option value="Cadastro"> Cadastro </option>
                <option value="Elogio"> Elogio </option>
            </select>
        </p>

        <p style="text-align: center;">
            <label for="descricao">Descrição: </label> <br>
            <textarea name="descricao" id="id_descricao" placeholder="Descreva o assunto a tratar:"
                required> </textarea>
        </p>

        <p style="text-align: center;">
            <input type="submit" value="Enviar">
            <input class="espaca-esquerda" type="reset" value="Limpar dados">
        </p>

    </form>

</div>

<h1 id="rodape-title"> </h1>
<?php 
include_once "../template/footer.php";
?>
<h1 id="rodape-title"> </h1>