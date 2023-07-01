<?php
// Conectar ao banco de dados

// Verificar se a conexão foi estabelecida com sucesso
if ($conexao->connect_errno) {
    echo "Falha ao conectar ao banco de dados: " . $conexao->connect_error;
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeProcedimento = $_POST["nome_procedimento"];
    $nomeCliente = $_POST["nome_cliente"];
    $nomeProfissional = $_POST["nome_profissional"];
    $dataProcedimento = $_POST["data_proc"];

    // Verifica se a data escolhida é posterior ao dia atual e não é domingo
    $dataAtual = date('Y-m-d');
    $diaSemana = date('w', strtotime($dataProcedimento));
    if ($dataProcedimento >= $dataAtual && $diaSemana != 0) {

        // Verifica se a data escolhida está disponível na agenda do profissional
        $sqlAgenda = "SELECT COUNT(*) as total FROM consultas WHERE nome_profissional = '$nomeProfissional' AND data_proc = '$dataProcedimento'";
        $resultAgenda = $conexao->query($sqlAgenda);
        $rowAgenda = $resultAgenda->fetch_assoc();
        $totalConsultas = $rowAgenda['total'];

        if ($totalConsultas == 0) {
            // A data escolhida é válida, não é domingo e está disponível na agenda do profissional

            // Insere a consulta no banco de dados
            $sql = "INSERT INTO consultas (nome_procedimento, nome_cliente, nome_profissional, data_proc) VALUES ('$nomeProcedimento', '$nomeCliente', '$nomeProfissional', '$dataProcedimento')";

            if ($conexao->query($sql) === true) {
                echo "Consulta marcada com sucesso!";
            } else {
                echo "Erro ao marcar a consulta: " . $conexao->error;
            }
        } else {
            echo "A data escolhida não está disponível na agenda do profissional.";
        }
    } else {
        echo "A data escolhida é inválida ou é domingo.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Marcar Consulta</title>
</head>
<body>
    <h1>Marcar Consulta</h1>
    <?php 
    $sql = "SELECT * FROM servicos WHERE id=".$_REQUEST["id"];
    $res = $conexao->query($sql);
    $row = $res->fetch_object();
    
    ?>
    <form action="" method="POST">
        <input type="hidden" name="acao2">
        <div class="mb-3">
            <label>Nome do Procedimento</label>
            <input type="text" name="nome_procedimento" value="<?php echo $row->descrica_nome; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nome do Cliente</label>
            <select name="nome_cliente" class="form-control">
                <?php
                $sql2 = "SELECT nome FROM usuarios ORDER BY nome ASC";
                $result = $conexao->query($sql2);
                while ($usuario = $result->fetch_assoc()) {
                    echo "<option value='" . $usuario['nome'] . "'>" . $usuario['nome'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label>Nome do Profissional</label>
            <select name="nome_profissional" id="nome_profissional" class="form-control">
                <?php
                $servicoEscolhido = $row->descrica_nome;
                $sql3 = "SELECT nome_profissional, dias_atendimento FROM profissionais WHERE servicos LIKE '%$servicoEscolhido%'";
                $result2 = $conexao->query($sql3);
                while ($profissional = $result2->fetch_assoc()) {
                    echo "<option value='" . $profissional['nome_profissional'] . "'>" . $profissional['nome_profissional'] . " - Dias de Atendimento: " . $profissional['dias_atendimento'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nome_profissional"])) {
                $profissionalSelecionado = $_POST["nome_profissional"];

                // Obter os dias disponíveis na agenda do profissional selecionado
                $sqlAgendaProfissional = "SELECT DISTINCT data_proc FROM consultas WHERE nome_profissional = '$profissionalSelecionado'";
                $resultAgendaProfissional = $conexao->query($sqlAgendaProfissional);

                if ($resultAgendaProfissional->num_rows > 0) {
                    echo "<select name='data_proc' class='form-control'>";
                    while ($rowAgendaProfissional = $resultAgendaProfissional->fetch_assoc()) {
                        $dataDisponivel = $rowAgendaProfissional['data_proc'];
                        echo "<option value='$dataDisponivel'>$dataDisponivel</option>";
                    }
                    echo "</select>";
                } else {
                    echo "<p>Nenhum dia disponível na agenda do profissional selecionado.</p>";
                }
            }
            ?>
        </div>
        <div class="mb-3">
            <label>Data de Procedimento</label>
            <input type="date" name="data_proc" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </div>
    </form>
    
</body>
</html>

<?php
// Fechar a conexão com o banco de dados
$conexao->close();
?>
