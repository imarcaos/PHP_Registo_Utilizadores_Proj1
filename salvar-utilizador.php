<?php

    switch ($_REQUEST["acao"]) {
        case 'inserir':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"]; 
            
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc)
                    VALUES (
                        '{$nome}',
                        '{$email}',
                        '{$senha}',
                        '{$data_nasc}')
                    ";
            $res = $conn->query($sql);
            
            if ($res==true) {
                print "<script>alert('Registo feito com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível Registar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"]; 

            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        email='{$email}',
                        senha='{$email}',
                        data_nasc='{$data_nasc}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            
            if ($res==true) {
                print "<script>alert('Editado com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível Editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'apagar':            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            
            if ($res==true) {
                print "<script>alert('Apagado com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível Apagar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
}
