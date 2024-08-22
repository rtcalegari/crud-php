<?php
	require 'conexao.php';
	// Recebe o termo de pesquisa se existir
	$termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';
	
	// Verifica se o termo de pesquisa está vazio, 
	//se estiver executa uma consulta completa
	if (empty($termo)){
		$conexao = conexao::getInstance();
		$sql = 'SELECT id, nome, email, celular, 
		status FROM cliente';
		$stm = $conexao->prepare($sql);
		$stm->execute();
		
		$clientes = $stm->fetchAll(PDO::FETCH_OBJ);
	} else
	{
		$conexao = conexao::getInstance();
		$sql = 'SELECT id, nome, email, celular, 
		status FROM cliente where nome like :nome 
		or email like :email';
		$stm = $conexao->prepare($sql);
		$stm->bindValue(':nome',$termo.'%');
		$stm->bindValue(':email',$termo.'%');
		$stm->execute();
		$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Listagem de Clientes</title>
	<link rel="stylesheet" type="text/css" 
	href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" 
	href="css/custom.css">
</head>
<body>
	<div class='container'>
		<fieldset>
			<!-- Cabeçalho da Listagem -->
			<legend><h1>Listagem de Clientes</h1></legend>

			<!-- Formulário de Pesquisa -->
			<form action="" method="get" id='form-contato'
			class="form-horizontal col-md-10">
				<label class="col-md-2 control-label"
				for="termo">Pesquisar</label>
				<div class='col-md-7'>
			    	<input type="text" class="form-control"
					id="termo" name="termo" 
					placeholder="Infome o Nome ou E-mail">
				</div>
			    <button type="submit" class="btn btn-primary">
				Pesquisar</button>
			    <a href='index.php' class="btn btn-danger">
				Ver Todos</a>
			</form>
			
			<!-- Link para página de cadastro -->
			<a href='cadastro.php' 
			class="btn btn-success pull-right">
			Cadastrar Cliente</a>
			<div class='clearfix'></div>
			
			<?php if (!empty($clientes)){ ?>
			
			<!--Tabela de Clientes -->
			<table class="table table-striped">
					<tr class='active'>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Celular</th>
						<th>Status</th>
						<th>Ação</th>
					</tr>
					<?php foreach($clientes as $cliente){?>
					<tr>
						<td><?=$cliente->nome?></td>
						<td><?=$cliente->email?></td>
						<td><?=$cliente->celular?></td>
						<td><?=$cliente->status?></td>
						<td>							
						<a href='editar.php?id=<?=$cliente->id?>' class="btn btn-primary">Editar</a>
								<a href='javascript:void(0)' class="btn btn-danger link_exclusao" rel="<?=$cliente->id?>">Excluir</a>
							</td>
						</tr>	
					<?php }?>
				</table>

			<?php } else{ ?>
				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem clientes cadastrados!</h3>
			<?php } ?>

		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>

