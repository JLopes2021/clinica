<h1 style="color: #F7C7CD; font-size: 10vmin; font-weight: bold; text-shadow: 2px 2px 4px #000;">Cadastre novos Clientes</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar"> <!-- Campo oculto para indicar a ação de cadastrar -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required> <!-- Campo para inserir o nome do usuário -->
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" required> <!-- Campo para inserir o e-mail do usuário -->
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required> <!-- Campo para inserir a senha do usuário -->
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" required> <!-- Campo para inserir a data de nascimento do usuário -->
    </div>
    <div class="mb-3">
        <label>RG</label>
        <input type="number" name="rg" class="form-control" pattern="[0-9]{1,12}" title="Digite apenas números e no máximo 12 caracteres" required> <!-- Campo para inserir o RG do usuário -->
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf" class="form-control" pattern="[0-9]{1,12}" maxlength="12" size="12" title="Digite apenas números e não deixe vazio" required> <!-- Campo para inserir o CPF do usuário -->
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="tel" class="form-control"> <!-- Campo para inserir o telefone do usuário -->
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-secondary">Enviar</button> <!-- Botão de envio do formulário -->
    </div>
    <div>
        <h4>Cadastro</h4> <!-- Título opcional para o formulário -->
    </div>
</form>
