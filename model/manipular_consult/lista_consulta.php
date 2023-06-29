<h1>Listar Consultas</h1>
<?php 
// Consulta SQL para selecionar todas as consultas da tabela "consultas"
$sql = "SELECT * FROM consultas";
$res = $conexao->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    // Se houver resultados, exibe-os em uma tabela
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>Nome do Procedimento</th>";
    print "<th>Nome do Cliente</th>";
    print "<th>Data do Procedimento</th>";
    print "<th>Ações</th>";
    print "</tr>";
    
    // Loop para percorrer cada registro retornado pela consulta
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->nome_procedimento."</td>"; // Exibe o nome do procedimento
        print "<td>".$row->nome_cliente."</td>"; // Exibe o nome do cliente
        print "<td>".$row->data_proc."</td>"; // Exibe a data do procedimento
        print "<td>";
        print "<form method='POST'>"; // Formulário para a exclusão do registro
        print "<input type='hidden' name='id_consulta' value='".$row->id."'>"; // Campo oculto com o ID da consulta
        print "<button type='submit' class='btn btn-danger' name='excluir_consulta'>Excluir</button>"; // Botão de exclusão
        print "</form>";
        print "</td>";
        print "</tr>";
    }
    print"</table>";
} else {
    // Caso não haja resultados, exibe uma mensagem de alerta
    print "<p class='alert alert-danger'>Não foram encontrados resultados!</p>";
}

// Verifica se o botão de exclusão foi acionado
if (isset($_POST['excluir_consulta'])) {
    $idConsulta = $_POST['id_consulta'];

    // Realize aqui a lógica de exclusão do registro com base no ID da consulta recebido
    // Exemplo:
    $sqlExcluir = "DELETE FROM consultas WHERE id = $idConsulta";
    $conexao->query($sqlExcluir);
    // Verifique se a exclusão foi realizada com sucesso e exiba uma mensagem adequada
}
?>
