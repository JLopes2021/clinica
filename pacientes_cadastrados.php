<?php
// Conectar ao banco de dados

// Verificar se a conexão foi estabelecida com sucesso


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeProcedimento = $_POST["nome_procedimento"];
    $nomeCliente = $_POST["nome_cliente"];
    $dataProcedimento = $_POST["data_proc"];

    $sql = "INSERT INTO consultas (nome_procedimento, nome_cliente, data_proc) VALUES ('$nomeProcedimento', '$nomeCliente', '$dataProcedimento')";

    if ($conexao->query($sql) === true) {
        echo "Consulta marcada com sucesso!";
    } else {
        echo "Erro ao marcar a consulta: " . $conexao->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Marcar Consulta de cliente já cadastrado</title>
</head>
<body>
    <h1>Marcar Consulta de cliente já cadastrado</h1>
    <?php 
    
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
                $sql = "SELECT nome_cliente FROM clientes";
                $result = $conexao->query($sql);
                while ($cliente = $result->fetch_assoc()) {
                    echo "<option value='" . $cliente['nome_cliente'] . "'>" . $cliente['nome_cliente'] . "</option>";
                }
                ?>
            </select>
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
