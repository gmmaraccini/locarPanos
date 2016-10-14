
<html>
<head>
	<title>Pagina de Recolha - Locar Panos</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
		<!-- JQUERY -->		
		<script src="assets/plugin/jquery/js/jquery-3.1.0.min.js"></script>
	
	
		<!-- PLUGINS PERSONALIZADOS --> 
		<link href="assets/css/cadastro.css" rel="stylesheet">
		<script src="assets/js/script.js"></script>

</head>
<body>
	<div class="geral"> <!-- Div que engloba tudo -->
		<div class="menuinicial">
			<div class="esquerda">
				<div class="logo">
					<img src="assets/img/logo.png">
				</div>
				<div class="clientes_escolha">
					<select multiple="multiple">
                                            <?php foreach ($produtos as $produto): ?>
						<option value="<?php echo $produto->id ?>"><?php echo $produto->nome ?></option>
                                            <?php endforeach; ?>

					</select>
				</div>				
			</div>
			<div class="direita">

				<div class="form">
					<p class="titulocadastro">Cadastro de Produtos</h1>
					<form action="cadastroProdutos" method="POST">
						<p>Nome Produto:</p><input type="text" name="nomeproduto"><br />
						
                                                <input type="submit" value="Adicionar Produto">
						
						
					</form>
					
				</div>				
			</div>
		</div>
	</div>		
</body>
</html>