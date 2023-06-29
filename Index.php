<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Meu CSS -->
    <link href="./css/pagina_inicial.css" rel="stylesheet">

    <!-- Inclusão do arquivo CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Cadastre o Usuário</title>
    
</head>
<body>
   <?php 
   include("./layout/navbar.php");
   ?>

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
                            // Inclusão do arquivo de edição de usuário
                            include("./model/manipular_consult/lista_consulta.php");
                            break;
                            case "marcar":
                                // Inclusão do arquivo de edição de usuário
                                include("./model/manipular_consult/novo_consulta.php");
                                break;
                    default:
                        // Página inicial padrão
                        include("./view/pagina_inicial.php");
                }
                ?>
            </div>
        </div>
    </div>

    <?php 
   include("./layout/footer.php");
   ?>
    <!-- Inclusão do arquivo JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
