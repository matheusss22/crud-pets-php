<h1>Editar Usuário</h1>

<?php
    $sql = "SELECT * FROM tb_pets WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="md-3 mt-2">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome ?>">
    </div>
    <div class="md-3 mt-2">
        <label>Dono</label>
        <input type="text" name="dono" class="form-control" value="<?php print $row->dono ?>">
    </div>
    <div class="md-3 mt-2">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control" value="<?php print $row->telefone ?>">
    </div>
    <div class="md-3 mt-2">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email ?>">
    </div>
    <div class="md-3 mt-2">
        <label>URL Foto</label>
        <input type="text" name="url-foto" class="form-control" value="<?php print $row->url_foto ?>">
    </div>
    <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>