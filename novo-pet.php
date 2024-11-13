<h1>Novo Pet 🐕</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="md-3 mt-2">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="md-3 mt-2">
        <label>Dono</label>
        <input type="text" name="dono" class="form-control">
    </div>
    <div class="md-3 mt-2">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control">
    </div>
    <div class="md-3 mt-2">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="md-3 mt-2">
        <label>URL Foto</label>
        <input type="text" name="url-foto" class="form-control">
    </div>
    <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>