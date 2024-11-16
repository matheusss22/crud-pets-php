<h1>🐾 Lista dos pets cadastrados | Mocky API🐾</h1><br>

<!-- Requisição do Mocky -->
<?php
try {
    $url = 'https://run.mocky.io/v3/d6551618-9492-4b8c-bdc4-460005006693';
    $response = @file_get_contents($url);

    if ($response === false) {
        throw new Exception("Falha ao requisitar a API Mocky.");
    }

    $data = json_decode($response, true);

    if ($data === null) {
        throw new Exception("Erro ao decodificar JSON.");
    }
?>

<!-- Mensagem de sucesso -->
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Dados carregados com sucesso.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<!-- Tabela de pets -->
<table class="table table-hover table-striped table-bordered">
    <thead class="table-primary">
        <tr>
            <th style="text-align: center">Foto</th>
            <th style="text-align: center">Nome</th>
            <th style="text-align: center">Dono</th>
            <th style="text-align: center">Telefone</th>
            <th style="text-align: center">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item): ?>
        <tr>
            <td style="text-align: center; vertical-align: middle;">
                <img src="<?= htmlspecialchars($item['imagem'] ?? 'default.jpg'); ?>" 
                     alt="Foto" class="img-pet">
            </td>
            <td style="text-align: center; vertical-align: middle;">
                <?= htmlspecialchars($item['cachorro'] ?? 'Sem nome'); ?>
            </td>
            <td style="text-align: center; vertical-align: middle;">
                <?= htmlspecialchars($item['dono'] ?? 'Desconhecido'); ?>
            </td>
            <td style="text-align: center; vertical-align: middle;">
                <?= htmlspecialchars($item['telefone'] ?? 'Não informado'); ?>
            </td>
            <td style="text-align: center; vertical-align: middle;">
                <?= htmlspecialchars($item['email'] ?? 'Não informado'); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php  } catch (Exception $e) { ?>
    <!-- Mensagem de erro -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= htmlspecialchars($e->getMessage()); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
