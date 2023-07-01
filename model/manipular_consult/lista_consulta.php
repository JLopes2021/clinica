<h1 style="color: #F7C7CD; font-size: 10vmin; font-weight: bold; text-shadow: 2px 2px 4px #000;">Consultas Marcadas</h1>

<?php
$sql2 = "SELECT * FROM consultas";
$res = $conexao->query($sql2);
$qtd = $res->num_rows;

if ($qtd > 0) {
    // Se houver resultados, exibe-os em uma tabela
    echo "<table class='table table-hover table-striped table-bordered'>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Procedimento</th>";
    echo "<th>Data de Procedimento</th>";
    echo "<th>Nome Profissional</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    // Loop para percorrer cada registro retornado pela consulta
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>".$row->nome_cliente."</td>"; // Exibe o nome do usuário
        echo "<td>".$row->nome_procedimento."</td>"; // Exibe o procedimento
        echo "<td>".date('d/m/Y', strtotime($row->data_proc))."</td>"; // Exibe a data de procedimento no formato dd-mm-yyyy
        echo "<td>".$row->nome_profissional."</td>"; // Exibe o procedimento
        echo "<td>";
        // Formulário para exclusão da consulta
        echo "<form method='post'>";
        echo "<input type='hidden' name='excluir_id' value='".$row->id."'>";
        echo "<button type='submit' class='btn btn-danger'>Excluir</button>";
        echo "</form>";
        echo "</td>";

        echo "</tr>";
    }
    echo"</table>";
} else {
    // Caso não haja resultados, exibe uma mensagem de alerta
    echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
// Verificar se o ID da consulta foi recebido via POST
if (isset($_POST['excluir_id'])) {
    $id = $_POST['excluir_id'];


    // Verificar se a conexão foi estabelecida com sucesso
    if ($conexao->connect_errno) {
        echo "Falha ao conectar ao banco de dados: " . $conexao->connect_error;
        exit();
    }

    // Preparar a consulta SQL para excluir a consulta com base no ID
    $sql = "DELETE FROM consultas WHERE id = $id";

    // Executar a consulta
    if ($conexao->query($sql) === TRUE) {
        // Exclusão realizada com sucesso
        echo "Consulta excluída com sucesso!";
    } else {
        // Erro ao executar a consulta
        echo "Erro ao excluir consulta: " . $conexao->error;
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
}

// Consulta SQL para selecionar todas as consultas da tabela "consultas"

?>
