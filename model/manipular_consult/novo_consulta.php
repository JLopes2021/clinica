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
    <title>Marcar Consulta</title>
</head>
<body>
    <h1>Marcar Consulta</h1>
    <?php 
    $sql = "SELECT * FROM servicos   WHERE id=".$_REQUEST["id"];
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
            <input type="text" name="nome_cliente" class="form-control">
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
