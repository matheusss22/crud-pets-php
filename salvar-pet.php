<?php
    switch ($_REQUEST["acao"]) {
        case "cadastrar":
            $nome = $_POST["nome"];
            $dono = $_POST["dono"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $url_foto = $_POST["url-foto"];

            $sql = "INSERT INTO tb_pets (nome, dono, telefone, email, url_foto) VALUES ('{$nome}', '{$dono}', '{$telefone}', '{$email}', '{$url_foto}')";
            $res = $conn->query($sql);

            if($res==true) {
                print "<script>alert('Pet cadastrado com sucesso!')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Não foi possível realizar o cadastro do pet!')</script>";
                print "<script>location.href='?page=listar'</script>";
            }

            break;
        
        case "editar":
            $nome = $_POST["nome"];
            $dono = $_POST["dono"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $url_foto = $_POST["url-foto"];

            $sql = "UPDATE tb_pets SET nome='{$nome}', dono='{$dono}', telefone='{$telefone}', email='{$email}', url_foto='{$url_foto}' WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res==true) {
                print "<script>alert('Pet editado com sucesso!')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Não foi possível editar o pet!')</script>";
                print "<script>location.href='?page=listar'</script>";
            }

            break;
        
        case "excluir":
            $sql = "DELETE FROM tb_pets WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res==true) {
                print "<script>alert('Pet excluído com sucesso!')</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Não foi possível excluir o oet!')</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            
            break;
    }