<?php
if (isset($_REQUEST["acao"])) {
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];
            $rg = $_POST["rg"];
            $cpf = $_POST["cpf"];
            $tel = $_POST["tel"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc, rg, cpf, tel) VALUES (
                '{$nome}', '{$email}', '{$senha}', '{$data_nasc}', '{$rg}', '{$cpf}', '{$tel}')";

            $res = $conexao->query($sql);

            if ($res) {
                echo "<script>alert('Cadastrado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível cadastrar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'cadastrar_consulta':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO consultas (nome, email, senha, data_nasc) VALUES (
                '{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conexao->query($sql);

            if ($res) {
                echo "<script>alert('Consulta cadastrada com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível cadastrar a consulta');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET 
                nome = '{$nome}',
                email = '{$email}',
                senha = '{$senha}',
                data_nasc = '{$data_nasc}'
                WHERE id = {$id}";

            $res = $conexao->query($sql);

            if ($res) {
                echo "<script>alert('Usuário editado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível editar o usuário');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $id = $_REQUEST["id"];
            $sql = "DELETE FROM usuarios WHERE id = {$id}";

            $res = $conexao->query($sql);
            if ($res) {
                echo "<script>alert('Usuário excluído com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível excluir o usuário');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir2':
            $id = $_REQUEST["id"];
            $sql = "DELETE FROM servicos WHERE id = {$id}";

            $res = $conexao->query($sql);
            if ($res) {
                echo "<script>alert('Serviço excluído com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível excluir o serviço');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
    }
}
?>
