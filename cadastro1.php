<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
    <div class='container'>
        <fieldset>
            <form action="action_cliente.php" method="post" id='form-contato'>
                <!-- Linha 1: Título -->
                <div class="form-row col-md-12 ">
                    <h1 class=" mb-4 col-md-10 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                          <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                        </svg>
                        Cadastro de Cliente
                    </h1>
                </div>

                <!-- Linha 2: Nome e E-mail -->
                <div class="form-row col-md-12 ">
                    <div class="form-group col-md-5">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o Nome">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
                    </div>
                </div>
                <!-- Linha 3: CPF, Data de Nascimento, Telefone, Celular e Status -->
                <div class="form-row col-md-12">
                    <div class="form-group col-md-2">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" maxlength="14" name="cpf" placeholder="Informe o CPF">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="data_nascimento">Nascimento</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" maxlength="12" name="telefone" placeholder="Informe o Telefone">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" maxlength="13" name="celular" placeholder="Informe o Celular">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="">Selecione</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="hidden" name="acao" value="incluir">
                        <button type="submit"
                        class="btn btn-primary" id='botao'>Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
