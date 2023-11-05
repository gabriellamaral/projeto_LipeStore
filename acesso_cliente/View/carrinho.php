<?php
    //incluindo o template do cabeçalho
    include_once("../template/header_pos_login.php");
?>


<hr>
<h1 style="text-align: center;"> CARRINHO DE COMPRAS</h1>
<hr>
<hr>


<div class="container">

    <div class="cart-container">

        <header>

            <h3>Carrinho de Compras</h3>

        </header>
        <div id="scarin">

            <div class="cart-body">

                <div class="cart-item">

                    <div class="cart-row">

                        <div class="cart-row-cell pic">

                            <a href="#">-</a>

                            <span></span>

                        </div>

                        <div class="cart-row-cell desc">

                            <h5>Camisa de time Argentina</h5>



                        </div>

                        <div class="cart-row-cell quant">
                            <div class="field">
                                <label for="nome nota fiscal">Numero da nota fiscal:</label>
                                <input type="text" id="Nnf" name="Nnf" placeholder="***" required>
                            </div>
                            <hr>s


                            <ul>
                                <li><a href="#">-</a></li>

                                <li>2</li>

                                <li><a href="#">+</a></li>
                            </ul>

                        </div>

                        <div class="cart-row-cell amount">
                            <br>
                            <br>

                            <p>R$120,00</p>

                        </div>

                    </div>

                    <div class="cart-row">

                        <div class="cart-row-cell pic">

                            <a href="#">-</a>

                            <span></span>

                        </div>

                        <div class="cart-row-cell desc">

                            <h5>Camisa de time França</h5>


                        </div>

                        <div class="cart-row-cell quant">
                            <div class="field">
                                <label for="nome nota fiscal">Numero da nota fiscal:</label>
                                <input type="text" id="Nnf" name="Nnf" placeholder="***" required>
                            </div>
                            <hr>

                            <ul>
                                <li><a href="#">-</a></li>

                                <li>2</li>

                                <li><a href="#">+</a></li>
                            </ul>

                        </div>

                        <div class="cart-row-cell amount">
                            <br>
                            <br>

                            <p>R$120,00</p>

                        </div>

                    </div>

                    <div class="cart-row">

                        <div class="cart-row-cell pic">

                            <a href="#">-</a>

                            <span></span>

                        </div>

                        <div class="cart-row-cell desc">

                            <h5>Camisa de time Liverpol</h5>



                        </div>

                        <div class="cart-row-cell quant">
                            <div class="field">
                                <label for="nome nota fiscal">Numero da nota fiscal:</label>
                                <input type="text" id="Nnf" name="Nnf" placeholder="***" required>
                            </div>
                            <hr>s

                            <ul>
                                <li><a href="#">-</a></li>

                                <li>2</li>

                                <li><a href="#">+</a></li>
                            </ul>

                        </div>

                        <div class="cart-row-cell amount">
                            <br>
                            <br>

                            <p>R$120,00</p>

                        </div>


                    </div>

                </div>

            </div>

            <footer>


                <div class="totals">

                    <p class="total-label">Subtotal</p>

                    <p class="total-amount">R$120,00</p>

                </div>


                <div class="totals">

                    <p class="total-label">Total</p>

                    <p class="total-amount"></p>

                </div>

                <button>Finalizar Compra</button>

            </footer>

        </div>

        </body>

        </html>