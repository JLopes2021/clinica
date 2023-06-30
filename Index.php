<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Meu CSS -->
    <link href="./css/pagina_inicial.css" rel="stylesheet">
    <link href="./css/footer.css" rel="stylesheet">

    <!-- Inclusão do arquivo CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cadastre o Usuário</title>
</head>
<body>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-family: Arial, sans-serif; background-color: #F7C7CD; box-shadow: 0 2px 4px #F7C7CD;">
    <h1 style="font-size: 24px; font-weight: bold; margin-right: 20px;">Logo aqui</h1>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Links da barra de navegação -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./Index.php" style="font-size: 16px; color: #333; text-decoration: none;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo" style="font-size: 16px; color: #333; text-decoration: none;">Novo Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar" style="font-size: 16px; color: #333; text-decoration: none;">Lista de Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listarC" style="font-size: 16px; color: #333; text-decoration: none;">Listar Consultas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col mt-2">
                    <?php 
                    // Inclusão do arquivo de conexão com o banco de dados
                    include("./control/conexao.php");

                    // Verificação da página solicitada
                    switch (@$_REQUEST["page"]) {
                        case "novo":
                            // Inclusão do arquivo de criação de novo usuário
                            include("./model/manipular_usu/novo_usuario.php");
                            break;
                        case "listar":
                            // Inclusão do arquivo de exibição da lista de usuários
                            include("./view/view_usu/listar_usuario.php");
                            break;
                        case "salvar":
                            // Inclusão do arquivo de salvamento de usuário
                            include("./model/manipular_usu/salvar_usuario.php");
                            break;
                        case "editar":
                            // Inclusão do arquivo de edição de usuário
                            include("./model/manipular_usu/editar_usuario.php");
                            break;
                        case "listarC":
                            // Inclusão do arquivo de listagem de consultas
                            include("./model/manipular_consult/lista_consulta.php");
                            break;
                        case "marcar":
                            // Inclusão do arquivo de criação de nova consulta
                            include("./model/manipular_consult/novo_consulta.php");
                            break;
                        default:
                            // Página inicial padrão
                            include("./view/pagina_inicial.php");
                    }
                    ?>
                   
        <div class="footer">
            <p>Clínica Estética Esteticistas LTDA</p>
        </div>
    </div>

    <!-- Inclusão do arquivo JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
