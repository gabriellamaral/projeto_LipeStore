<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_pos_login.php");
?>


<hr>
<h1 style="text-align: center;"> ATUALIZAR OS MEUS PEDIDOS</h1>
<hr>


<hr>
<hr>
<div class="container">

    <div class="cart-container">

        <header>

            <h3>ATUALIZAR PEDIDOS</h3>

        </header>
        <div id="scarin">

            <div class="cart-body">

                <div class="cart-item">

                    <div class="cart-row">

                        <div class="cart-row-cell pic ">



                            <span></span>

                        </div>

                        <div class="cart-row-cell desc">

                            <form class="formulario" method="post">
                                <p> preencha os dados para atualizar</p>

                                <div class="field">
                                    <label for="nome nota fiscal">Numero da nota fiscal:</label>
                                    <input type="text" id="Nnf" name="Nnf" placeholder="***" required>
                                </div><br>


                                <div class="field">
                                    <label for="email">Quantidade do Produto :</label>
                                    <input type="email" id="email" name="email" placeholder="***" required>
                                </div>
                                <br>

                                <div class="field">
                                    <label for="valor unitario">Valor unitário</label>
                                    <input type="Vu" id="vu" name="vu" placeholder="***" required>
                                </div>
                                <br>
                                <div class="field">
                                    <label for="resultaado total">Resultado Total</label>
                                    <input type="Rt" id="RT" name="Rt" placeholder="***" required>
                                </div>




                                <div>
                                    <p>
                                        Clinte:
                                        <select>
                                            <option value=""> Nenhum </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5</option>

                                        </select> Nome do Produto:
                                        <select>
                                            <option value=""> Nenhuma </option>
                                            <option value="camisa"> Camisa </option>
                                            <option value="Relogio"> Relógio </option>
                                            <option value="Tenis"> Tenis </option>



                                </div>



                            </form>

                            <footer>


                                <div>

                                    <input class="espaca-esquerda" type="submit" value="Atualizar" />
                                </div>

                            </footer>


                        </div>

                        </body>

                        </html>