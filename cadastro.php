<html>
	<head>
		<meta charset="UTF-8">
		<title> cadastro de Cliente </title>
		<link rel="stylesheet" type="text/css" 
			href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css"
			href="css/custom.css">
	</head>
	<body>
		<div class='container mt-5'>
			<fieldset>
				<legend>
					<h1>Formulário - Cadastro de Cliente</h1>
				</legend>
				<form action="action_cliente.php" 
					  method="post" id='form-contato'>
					<div class="form-group">
						<label for="nome"> Nome </label>
						<input type="text" class="form-control"
						id="nome" name="nome" 
						placeholder="Informe o Nome">
					</div>
					<div class="form-group">
					    <label for="email">E-mail</label>
					    <input type="email" class="form-control" 
						id="email" name="email" 
						placeholder="Informe o E-mail">
					</div>
					<div class="form-group">
					  <label for="cpf">CPF</label>
					  <input type="text" class="form-control" 
					  id="cpf" maxlength="14" name="cpf" 
					  placeholder="Informe o CPF">
					</div>
				
					<div class="form-group">
					  <label for="data_nascimento">Data de Nascimento</label>
					  <input type="date" class="form-control" 
					  id="data_nascimento" maxlength="10" 
					  name="data_nascimento">
					</div>
					<div class="form-group">
					  <label for="telefone">Telefone</label>
					  <input type="text" class="form-control" 
					  id="telefone" maxlength="12" 
					  name="telefone" 
					  placeholder="Informe o Telefone">
					</div>
					<div class="form-group">
					  <label for="celular">Celular</label>
					  <input type="text" class="form-control"
					  id="celular" maxlength="13" 
					  name="celular" 
					  placeholder="Informe o Celular">
					</div>
					<div class="form-group">
					  <label for="status">Status</label>
					  <select class="form-control" name="status" id="status">
						<option value="">Selecione o Status</option>
						<option value="Ativo">Ativo</option>
						<option value="Inativo">Inativo</option>
					  </select>
					</div>
					<input type="hidden" name="acao" value="incluir">
					<button type="submit"
					class="btn btn-primary" id='botao'>
					Cadastrar
					</button>
				</form>	  
			</fieldset>
		</div>
		<script type="text/javascript" src="js/custom.js">
		</script>
	</body>
</html>
