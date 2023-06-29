<h1>Listar Usuários</h1>
<?php 
// Consulta SQL para selecionar todos os usuários da tabela "usuarios"
$sql = "SELECT * FROM usuarios";
$res = $conexao->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    // Se houver resultados, exibe-os em uma tabela
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Ações</th>";
    print "</tr>";
    
    // Loop para percorrer cada registro retornado pela consulta
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->nome."</td>"; // Exibe o nome do usuário
        print "<td>".$row->email."</td>"; // Exibe o e-mail do usuário
        print "<td>".$row->data_nasc."</td>"; // Exibe a data de nascimento do usuário
        print "<td>
        <button onclick= \"location.href='?page=editar&id=".$row-> id."';\" class='btn btn-success'>Editar</button> 
        <button onclick= \"if(confirm('Vai excluir?')){location.href= '?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
        </td>"; // Botões de editar e excluir, com redirecionamento para as páginas correspondentes
        
        print "</tr>";
    }
    print"</table>";
} else {
    // Caso não haja resultados, exibe uma mensagem de alerta
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>

<!--Dicas da consulta-->
<div class="video">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>

</div>
