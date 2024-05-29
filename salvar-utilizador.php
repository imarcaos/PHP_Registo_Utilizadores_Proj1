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
            
            break;

        case 'editar':
            # code...
            break;

        case 'eliminar':
            # code...
            break;
}
