<section class="header">
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">Clínica Estética</h1>
        <p class="lead">Bem-vindo à nossa clínica estética, onde o cuidado e a beleza se unem para proporcionar uma experiência única de bem-estar e transformação. Nossa missão é ajudar você a realçar sua beleza natural, promovendo o equilíbrio entre corpo, mente e alma.</p>
    </div>
</section>

<section class="servicos">
    <ul class="list-unstyled">
        <?php 
        // Consulta SQL para selecionar todos os usuários da tabela "usuarios"
        $sql = "SELECT * FROM servicos";
        $res = $conexao->query($sql);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            // Se houver resultados, exibe-os em uma tabela
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>Tratamento</th>";
            print "<th>O que contém</th>";
            print "<th>Valor</th>";
            print "<th>Ações</th>";
            print "</tr>";

            // Loop para percorrer cada registro retornado pela consulta
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>".$row->tratamento_facial.$row->tratamento_corporal.$row->estetica_capilar.$row->embelezamento.$row->terapias_relaxantes."</td>"; // Exibe o nome do tratamento
                print "<td>".$row->descricao."</td>"; // Exibe a descrição do tratamento
                print "<td>".'R$ '.$row->valor.',00'."</td>"; // Exibe o valor do tratamento
                print "<td>
                <button onclick= \"location.href='?page=marcar&id=".$row-> id."';\" class='btn btn-success'>Horário</button> 
                </td>"; // Botões de editar e excluir, com redirecionamento para as páginas correspondentes

                print "</tr>";
            }
            print"</table>";
        } else {
            // Caso não haja resultados, exibe uma mensagem de alerta
            print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
        }
        ?>
    </ul>
</section>

<section class="aletorio">
    <div>
        <h1>Boas Práticas na Clínica de Estética</h1>
        <ul>
            <li>Profissionalismo</li>
            <li>Comunicação efetiva</li>
            <li>Higiene e assepsia</li>
            <li>Conhecimento atualizado</li>
            <li>Empatia e atendimento personalizado</li>
            <li>Confidencialidade</li>
            <li>Trabalho em equipe</li>
            <li>Resolução de problemas</li>
        </ul>
    </div>
</section>
