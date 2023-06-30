<h1 style="color: #F7C7CD; font-size: 10vmin; font-weight: bold; text-shadow: 2px 2px 4px #000;">Clientes Cadastrados</h1>
<?php 
    // Consulta SQL para selecionar todos os usuários da tabela "usuarios"
    $sql = "SELECT * FROM usuarios ORDER BY nome ASC";
    $res = $conexao->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        // Se houver resultados, exibe-os em uma tabela
        print "<table class='table table-hover table-striped table-bordered' style='width: auto; max-width: 90%;'>";
        print "<tr>";
        print "<th style='width: 20%;'><small>Nome</small></th>";
        print "<th style='width: 15%;'><small>E-mail</small></th>";
        print "<th style='width: 15%;'><small>Data de Nascimento</small></th>";
        print "<th style='width: 8%;'><small>RG</small></th>";
        print "<th style='width: 12%;'><small>CPF</small></th>";
        print "<th style='width: 12%;'><small>Telefone</small></th>";
        print "<th style='width: 20%;'><small>Ações</small></th>";
        print "</tr>";
        
        // Loop para percorrer cada registro retornado pela consulta
        $counter = 0; // Contador para alternar as cores das linhas
        while ($row = $res->fetch_object()) {
            $counter++;
            $row_color = ($counter % 2 == 0) ? '#F7C7CD' : 'white'; // Alterna as cores das linhas
            
            print "<tr style='background-color: $row_color;'>";
            print "<td style='width: 10%;'><small>".$row->nome."</small></td>"; // Exibe o nome do usuário com letra menor
            print "<td style='width: 15%;'><small>".$row->email."</small></td>"; // Exibe o e-mail do usuário com letra menor
            print "<td style='width: 12%;'><small>".date('d/m/Y', strtotime($row->data_nasc))."</small></td>"; // Exibe a data de nascimento com letra menor
            print "<td style='width: 8%;'><small>".$row->rg."</small></td>"; // Exibe rg do usuário com letra menor
            $cpf = $row->cpf;
            $formatted_cpf = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
            echo "<td style='width: 12%;'><small>".$formatted_cpf."</small></td>"; // Exibe o CPF formatado com letra menor
            echo "<td style='width: 12%;'><small>(" . substr($row->tel, 0, 2) . ")" . substr($row->tel, 2) . "</small></td>"; // Exibe o telefone com letra menor
            echo "<td style='width: 8%;'>
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button> 
            <button onclick=\"if(confirm('Vai excluir?')){location.href= '?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
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
