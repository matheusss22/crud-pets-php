<h1>Listar Pets 🐕</h1>

<?php
    $sql = "SELECT *  FROM tb_pets";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0) {
        print"<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th style='text-align: center'>Foto</th>";
            print "<th style='text-align: center'>Nome</th>";
            print "<th style='text-align: center'>Dono</th>";
            print "<th style='text-align: center'>Telefone</th>";
            print "<th style='text-align: center'>E-mail</th>";
            print "<th style='text-align: center' colspan='2'>Acões</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td style='text-align: center'>".$row->url_foto."</td>";
            print "<td style='text-align: center'>".$row->nome."</td>";
            print "<td style='text-align: center'>".$row->dono."</td>";
            print "<td style='text-align: center'>".$row->telefone."</td>";
            print "<td style='text-align: center'>".$row->email."</td>";
            print "<td style='text-align: center'>
                <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success'>Editar</button> 
                </td>";
            print "<td style='text-align: center'>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false}\"a class='btn btn-danger'>Excluir</button> 
                </td>";
            print "</tr>";
        }
        print"</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
