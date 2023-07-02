<!DOCTYPE html>
<html>
<head>
    <title>Lista de Profissionais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            background: linear-gradient(45deg, #F7C7CD, #E99DA5);
            color: white;
            border: 1px solid black;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            transform: perspective(1000px) rotateX(0deg);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: perspective(1000px) rotateX(-5deg);
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000;
        }

        .card p {
            font-size: 14px;
            color: black;
        }

        .card,
        .h-100 {
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: #F7C7CD; font-size: 10vmin; font-weight: bold; text-shadow: 2px 2px 4px #000;">Profissionais Disponíveis</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="especialidade">Especialidade:</label>
                <select class="form-control" id="especialidade" name="especialidade">
                    <option value="">Todos</option>
                    <option value="tratamento_facial">Tratamento Facial</option>
                    <option value="tratamento_corporal">Tratamento Corporal</option>
                    <option value="estetica_capilar">Estética Capilar</option>
                    <option value="embelezamento">Embelezamento</option>
                    <option value="terapias_relaxantes">Terapias Relaxantes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>

        <div class="row mt-3">
            <?php
            // Verificar se houve um envio de formulário (filtragem)
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $especialidade = $_POST['especialidade'];
                $nome = $_POST['nome'];

                // Realizar a consulta ao banco de dados com os parâmetros de filtragem
                $sql = "SELECT * FROM profissionais WHERE especialidade LIKE '%$especialidade%' AND nome_profissional LIKE '%$nome%' ORDER BY nome_profissional ASC";
            } else {
                // Consulta padrão sem filtros
                $sql = "SELECT * FROM profissionais";
            }

            // Realizar a consulta ao banco de dados e atribuir o resultado à variável $resultado
            $resultado = $conexao->query($sql);

            // Verificar se a consulta retornou algum resultado
            if ($resultado->num_rows > 0) {
                // Loop para exibir os profissionais em cards
                while ($row = $resultado->fetch_assoc()) {
                    ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['nome_profissional']; ?></h5>
                                <p class="card-text">CRM: <?php echo $row['crm']; ?></p>
                                <p class="card-text">Especialidade: <?php echo $row['especialidade']; ?></p>
                                <p class="card-text">Serviços: <?php echo $row['servicos']; ?></p>
                                <p class="card-text">Dias de Atendimento: <?php echo $row['dias_atendimento']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                // Caso não haja resultados, exibe uma mensagem
                echo "<p class='alert alert-info'>Nenhum profissional encontrado.</p>";
            }

            // Fechar a conexão com o banco de dados
            $conexao->close();
            ?>
        </div>
    </div>
</body>
</html>
