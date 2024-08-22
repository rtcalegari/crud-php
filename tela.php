<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Listagem de Clientes</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class='container'>
		<fieldset>

			<!-- Cabeçalho da Listagem -->
			<legend><h1>Listagem de Clientes</h1></legend>

			<!-- Formulário de Pesquisa -->
			<form action="" method="get" id='form-contato' class="form-horizontal col-md-10">
				<label class="col-md-2 control-label" for="termo">Pesquisar</label>
				<div class='col-md-7'>
			    	<input type="text" class="form-control" id="termo" name="termo" placeholder="Infome o Nome ou E-mail">
				</div>
			    <button type="submit" class="btn btn-primary">Pesquisar</button>
			    <a href='index.php' class="btn btn-primary">Ver Todos</a>
			</form>

			<!-- Link para página de cadastro -->
			<a href='cadastro.php' class="btn btn-success pull-right">Cadastrar Cliente</a>
			<div class='clearfix'></div>

			
		</fieldset>
	</div>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
