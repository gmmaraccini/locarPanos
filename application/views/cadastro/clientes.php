
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
                                            <?php foreach ($clientes as $cliente): ?>
						<option value="<?php echo $cliente->id ?>"><?php echo $cliente->nomefantasia ?></option>
                                            <?php endforeach; ?>

					</select>
				</div>				
			</div>
			<div class="direita">

				<div class="form">
					<p class="titulocadastro">Cadastro de Clientes</h1>
					<form action="cadastroClientes" method="POST">
						<p>Nome Fantasia:</p><input type="text" name="nomefantasia"><br />
						<p>Nome:</p><input type="text" name="nome"><br />
						<p>Endereço:</p><input type="text" name="endereco"><br />
						<p>Bairro:</p><input type="text" name="bairro"><br />
						<p>CEP:</p><input type="text" name="cep"><br />
						<p>CNPJ:</p><input type="text" name="cnpj"><br />
						<p>Vcto 1 quinz:</p><input type="text" name="vcto1"><br />
						<p>Vcto 2 quinz:</p><input type="text" name="vcto2"><br />
						<p>Vcto Mensal:</p><input type="text" name="vctomensal"><br />
						<p>Rota:</p><input type="text" name="rota"><br />
						<p>Telefone:</p><input type="text" name="telefone"><br />
						<p>Contato:</p><input type="text" name="contato"><br />
						<p>Email:</p><input type="text" name="email"><br />
						<div class="fundo">
							<div class="titulo">
								Entregas
							</div>
							<div class="quadradinhos">
								<ul>
									<li><input type="text" class="quadradinho" name="2F"></li>
									<li><input type="text" class="quadradinho" name="3F"></li>
									<li><input type="text" class="quadradinho" name="4F"></li>
									<li><input type="text" class="quadradinho" name="5F"></li>
									<li><input type="text" class="quadradinho" name="6F"></li>
									<li><input type="text" class="quadradinho" name="SAB"></li>
									<li><input type="text" class="quadradinho" name="DOM"></li>
							</ul>
							</div>
						</div>
                                                <input type="submit" value="Adicionar Novo">
						
						
					</form>
					
				</div>				
			</div>
		</div>
	</div>		
</body>
</html>