<?php 
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES (
            '{$nome}','{$email}','{$senha}','{$data_nasc}')";

        $res = $conexao->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href=?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href=?page=listar';</script>";
        }
        break;

        case 'cadastrar_consulta':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];
    
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES (
                '{$nome}','{$email}','{$senha}','{$data_nasc}')";
    
            $res = $conexao->query($sql);
    
            if ($res == true) {
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href=?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href=?page=listar';</script>";
            }
            break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]); // A senha é tratada com md5 antes de ser armazenada
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET 
            nome='{$nome}',
            nome='{$email}',
            nome='{$senha}',
            nome='{$data_nasc}' 
            WHERE 
                id=".$_REQUEST["id"];
        
        $res = $conexao->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href=?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível Editar');</script>";
            print "<script>location.href=?page=listar';</script>";
        }

        break;

    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conexao->query($sql);
        if ($res == true) {
            print "<script>alert('Excluído com sucesso');</script>";
            print "<script>location.href=?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir com sucesso');</script>";
            print "<script>location.href=?page=listar';</script>";
        }

        break;
}
?>
