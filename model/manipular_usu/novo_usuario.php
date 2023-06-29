<h1>Novos Usuários</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar"> <!-- Campo oculto para indicar a ação de cadastrar -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control"> <!-- Campo para inserir o nome do usuário -->
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control"> <!-- Campo para inserir o e-mail do usuário -->
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control"> <!-- Campo para inserir a senha do usuário -->
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control"> <!-- Campo para inserir a data de nascimento do usuário -->
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-secondary">Enviar</button> <!-- Botão de envio do formulário -->
    </div>
</form>
