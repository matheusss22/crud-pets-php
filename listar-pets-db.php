<h1>🐾 Lista dos pets cadastrados | Banco de dados🐾</h1><br>

<?php

    // Notificações das ações Cadastras, Editar e Deletar
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'cadastrar-sucesso') {
            print '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Cadastro realizada com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } elseif ($_GET['status'] == 'cadastrar-erro') {
            print '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Falha ao realizar o cadastro. Tente novamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } elseif ($_GET['status'] == 'editar-sucesso') {
            print '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Edição realizada com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } elseif ($_GET['status'] == 'editar-erro') {
            print '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Falha ao realizar a edição. Tente novamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } elseif ($_GET['status'] == 'excluir-sucesso') {
            print '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Pet deletado com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } elseif ($_GET['status'] == 'excluir-erro') {
            print '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Falha ao deletar o Pet. Tente novamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }


    // Consulta Banco de dados local
    $sql = "SELECT *  FROM tb_pets";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    // Monta a tabela
    if($qtd > 0) {
        print"<table class='table table-hover table-striped table-bordered'>";
            print "<tr class='table-primary'>";
            print "<th style='text-align: center'>Foto</th>";
            print "<th style='text-align: center'>Nome</th>";
            print "<th style='text-align: center'>Dono</th>";
            print "<th style='text-align: center'>Telefone</th>";
            print "<th style='text-align: center'>E-mail</th>";
            print "<th style='text-align: center' colspan='2'>Acões</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td style='text-align: center; vertical-align: middle;'><img src=".$row->url_foto." alt='foto do chachorro' class='img-pet'/></td>";
            print "<td style='text-align: center; vertical-align: middle;'>".$row->nome."</td>";
            print "<td style='text-align: center; vertical-align: middle;'>".$row->dono."</td>";
            print "<td style='text-align: center; vertical-align: middle;'>".$row->telefone."</td>";
            print "<td style='text-align: center; vertical-align: middle;'>".$row->email."</td>";

            print "<td style='text-align: center; vertical-align: middle;'>";
            print "<button onclick=\"location.href='?page=editar&id=" . $row->id . "'\" class='btn btn-success'><i class='fas fa-edit'></i> Editar</button>";
            print "</td>";
            
            print "<td style='text-align: center; vertical-align: middle;'>";
            print "<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "'}else{false}\" class='btn btn-danger'><i class='fas fa-trash-alt'></i> Excluir</button>";
            print "</td>";
        }
        print"</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
