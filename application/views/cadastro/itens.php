<html>
    <head>
        <title>Pagina de Cadastro de Itens - Locar Panos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- JQUERY -->		
        <script src="assets/plugin/jquery/js/jquery-3.1.0.min.js"></script>


        <!-- PLUGINS PERSONALIZADOS --> 
        <link href="assets/css/itens.css" rel="stylesheet">
        <script src="assets/js/itens.js"></script>


    </head>
    <body>
        <div class="geral"> <!-- Div que engloba tudo -->
            <div class="topoesquerda">
                <div class="logo">
                    <img src="assets/img/logo.png">
                </div>
            </div>
            <div class="topodireita">
                <div class="titulodiv">
                    <p>CADASTRO DE CLIENTES LAVAGEM</p>
                </div>
                <div class="buscadiv">
                    <p>Busca:</p>
                    <input type="text">
                    </input>
                </div>
                <div class="entregasdiv">
                    <div class="fundo">
                        <div class="titulo">
                            Entregas
                        </div>
                        <div class="quadradinhos">
                            <ul>
                                <li><input type="text" value="2F" class="quadradinho" name="2F"></li>
                                <li><input type="text" class="quadradinho" name="3F"></li>
                                <li><input type="text" value="4F" class="quadradinho" name="4F"></li>
                                <li><input type="text" class="quadradinho" name="5F"></li>
                                <li><input type="text" value="6F" class="quadradinho" name="6F"></li>
                                <li><input type="text" class="quadradinho" name="SAB"></li>
                                <li><input type="text" class="quadradinho" name="DOM"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="meio">
                <div class="meioesquerda">
                    <select multiple id="clientes">
                        <?php foreach ($clientes as $cliente): ?>
                            <option value="<?php echo $cliente->id ?>"><?php echo $cliente->nomefantasia ?></option>
                        <?php endforeach; ?>
                    </select> 

                </div>

                <div class="meiodireita">
                    <div class="tabela">
                        <div class="database-titulo">
                            <table class="database-titulo" width=100%>
                                <thead>
                                    <tr>
                                        <th class="text-left" width="60%">Nome</th>
                                        <th class="text-left" width="20%">Preço</th>
                                        <th class="text-left" width="10%">Excluir</th>

                                    </tr>
                                </thead>
                                <tbody class="database-campos">
                                    <?php if (!empty($itens)) { ?>
                                        <tr>



                                            <td class="table-text">
                                                <select>
                                                    <?php foreach ($produtos as $produto) : ?>
                                                        <option><?php echo $produto->nome ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </td>
                                            <td class="table-text"><input type="text" name="preco"></td>
                                            <td class="table-input"><button class="excluir"><img src="assets/img/excluir.png"></button></td>

                                        <?php }else { ?>
                                            <td class="table-text"><p>Clique no cliente a esquerda para cadastrar produtos</p></td>
                                        <?php } ?>

                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="botoes">
                        <ul>
                            <li><button>Novo</button></li>
                            <li><button>Fechar</button></li>
                        </ul>
                    </div>
                </div>
            </div>
    </body>
</html>