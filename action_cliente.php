<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema de Cadastro</title>
		<link rel="stylesheet" type="text/css" 
		href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" 
		href="css/custom.css">
	</head>
	<body>
		<?php  
			require 'conexao.php';
			$conexao = conexao::getInstance();
			
			$acao  = $_POST['acao'];
			
			$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
			$cpf   = (isset($_POST['cpf'])) ? str_replace(array('.','-'), '', $_POST['cpf']): '';
			$email = (isset($_POST['email'])) ? $_POST['email'] : '';
			$data_nascimento  = (isset($_POST['data_nascimento'])) ? $_POST['data_nascimento'] : '';
			$telefone  		  = (isset($_POST['telefone'])) ? str_replace(array('-', ' '), '', $_POST['telefone']) : '';
			$celular   		  = (isset($_POST['celular'])) ? str_replace(array('-', ' '), '', $_POST['celular']) : '';
			$status    		  = (isset($_POST['status'])) ? $_POST['status'] : '';

			
			
			//validando dados recebidos com PHP
			$mensagem='';
			
			if ($acao !='exluir'){
				if ($nome == '' || strlen($nome) < 3)
                $mensagem .= '<li>Favor preencher o Nome com pelo menos 3 caracteres.</li>';
            
				if ($cpf == '' || !preg_match('/^\d{11}$/', $cpf))
					$mensagem .= '<li>CPF inválido. Deve conter 
				apenas números e ter 11 dígitos.</li>';
				
				if ($email == '' )
					$mensagem .= '<li>Email inválido.</li>';
				
				if ($data_nascimento == '') 		
					$mensagem .= '<li>Favor preencher a Data de Nascimento.</li>';
				
				if ($telefone != '' && !preg_match('/^\d{10,11}$/', $telefone))
					$mensagem .= '<li>Telefone inválido. 
				Deve conter apenas números e ter 10 ou 11 dígitos.</li>';
				
				if ($celular != '' && !preg_match('/^\d{10,11}$/', $celular))
					$mensagem .= '<li>Celular inválido. 
				Deve conter apenas números e ter 10 ou 11 dígitos.</li>';
				
				if ($status == '')
					$mensagem .= '<li>Favor selecionar um Status.</li>';
			}
			
			if ($mensagem != '') {				
				echo '<div class="alert alert-danger" 
				role="alert">Erro ao realizar o cadastro.'.'<ul>' 
				. $mensagem . '</ul>'.'</div>';
			}else { 			
				//verifica se foi solicitada a inclusão de dados
				if ($acao=='incluir'){
					$sql='insert into cliente(nome, email, cpf,
					data_nascimento, telefone, celular, status)
					values(:nome,:email,:cpf,:data_nascimento,
					:telefone,:celular,:status)';
					
					$stm = $conexao->prepare($sql);
					$stm->bindValue(':nome', $nome);
					$stm->bindValue(':email', $email);
					$stm->bindValue(':cpf', $cpf);
					$stm->bindValue(':data_nascimento', $data_nascimento);
					$stm->bindValue(':telefone', $telefone);
					$stm->bindValue(':celular', $celular);
					$stm->bindValue(':status', $status);
					
					if ($stm->execute()) {
						// Se a execução foi bem-sucedida, exibe a mensagem de sucesso
						echo '<div class="alert alert-success" role="alert">Cadastro realizado com sucesso!</div>';
					} else {
						// Se a execução falhou, exibe uma mensagem de erro
						echo '<div class="alert alert-danger" role="alert">Erro ao realizar o cadastro. Tente novamente.</div>';
					}
				}
			}
		?>
		
		<!-- Botão para voltar à página anterior -->
		<button onclick="window.history.back()" 
		class="btn btn-primary">Voltar</button>	
	
	</body>
</html>



