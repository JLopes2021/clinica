<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Inclusão do arquivo CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Cadastre o Usuário</title>
</head>
<body>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1>Cadastro</h1>
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Links da barra de navegação -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Lista de Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php 
                // Inclusão do arquivo de conexão com o banco de dados
                include("./control/conexao.php");
                
                // Verificação da página solicitada
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        // Inclusão do arquivo de criação de novo usuário
                        include("./model/novo_usuario.php");
                        break;
                    case "listar":
                        // Inclusão do arquivo de exibição da lista de usuários
                        include("./view/listar_usuario.php");
                        break;
                    case "salvar":
                        // Inclusão do arquivo de salvamento de usuário
                        include("./model/salvar_usuario.php");
                        break;
                    case "editar":
                        // Inclusão do arquivo de edição de usuário
                        include("editar_usuario.php");
                        break;
                    default:
                        // Página inicial padrão
                        print "<h1>Olá, tudo bem?</h1>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Inclusão do arquivo JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
