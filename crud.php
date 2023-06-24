<?php
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
        $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $permicao = 'padrao';
            $status = 'ativo';



            $sql = "INSERT INTO usuarios (usuario, email, senha, nivel, status) VALUES ( '{$usuario}', '{$email}', '{$senha}', '{$permicao}', '{$status}' );";

            $res = $conn->query($sql);

            if($res==true){
                print " <script>alert('Cadastro realizado com Sucesso!!');</script> ";
                print " <script> location.href='?page=lista'; </script> ";
            }else{
                print " <script> alert('Erro no Cadastro!!'); </script> ";
                print " <script> location.href='?page=lista'; </script> ";
            }
            break;
        case 'editar':
        $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $permicao = $_POST['permicao'];
            $status = $_POST['status'];

        $sql = "UPDATE usuarios SET 
                        usuario = '{$usuario}',
                        email = '{$email}',
                        senha = '{$senha}',
                        nivel = '{$permicao}',
                        status = '{$status}'
                    WHERE 
                        usuario_id =".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print " <script>alert('Usuario editado com Sucesso!!');</script> ";
            print " <script> location.href='?page=lista'; </script> ";
        } else {
            print " <script> alert('Erro na edição!!'); </script> ";
            print " <script> location.href='?page=lista'; </script> ";
        }



            break;

        case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE usuario_id=". $_REQUEST["id"];
        $res = $conn->query($sql);

        if ($res == true) {
            print " <script>alert('Usuario deletado com Sucesso!!');</script> ";
            print " <script> location.href='?page=lista'; </script> ";
        } else {
            print " <script> alert('Erro ao deletar!!'); </script> ";
            print " <script> location.href='?page=lista'; </script> ";
        }
            break;
    }

    
?>