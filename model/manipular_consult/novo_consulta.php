<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeProcedimento = $_POST["nome_procedimento"];
    $nomeCliente = $_POST["nome_cliente"];
    $dataProcedimento = $_POST["data_proc"];


    $sql = "INSERT INTO consultas (nome_procedimento, nome_cliente, data_proc) VALUES ('$nomeProcedimento', '$nomeCliente', '$dataProcedimento')";

    $conexao->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Marcar Consulta</title>
</head>
<body>
    <h1>Marcar Consulta</h1>
    <form action="?page=novaconsulta" method="POST">
        <input type="hidden" name="acao2" value="cadastrar_consulta">
        <div class="mb-3">
            <label>Nome do Procedimento</label>
            <input type="text" name="nome_procedimento" class="form-control">
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
