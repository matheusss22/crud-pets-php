<h1>🐾 Lista dos pets cadastrados | Mocky API🐾</h1><br>

<?php
    $url = 'https://run.mocky.io/v3/404a6d49-8763-45d3-9ff0-990f51fb2eed';

    try {
        $response = @file_get_contents($url);
        
        if ($response === false) {
            throw new Exception("Falha ao requisitar a API Mocky.");
        }

        $data = json_decode($response, true);

        if ($data === null) {
            throw new Exception("Erro ao decodificar JSON.");
        }

        print '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Dados carregados com sucesso.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

    } catch (Exception $e) {
        print '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                ' . htmlspecialchars($e->getMessage()) . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
?>

<table  class='table table-hover table-striped table-bordered'>
    <tr  class='table-primary'>
        <th  style='text-align: center'>Foto</th>
        <th  style='text-align: center'>Nome</th>
        <th  style='text-align: center'>Dono</th>
        <th  style='text-align: center'>Telefone</th>
        <th  style='text-align: center'>Email</th>
    </tr>
    <tr>
        <?php foreach ($data as $item): ?>
        <td style='text-align: center; vertical-align: middle;'><img src="<?php echo htmlspecialchars($item['imagem']);?>" alt="Foto" class='img-pet'></td>
        <td style='text-align: center; vertical-align: middle;'><?php print htmlspecialchars($item['cachorro']); ?></td>
        <td style='text-align: center; vertical-align: middle;'><?php print htmlspecialchars($item['dono']); ?></td>
        <td style='text-align: center; vertical-align: middle;'><?php print htmlspecialchars($item['telefone']); ?></td>
        <td style='text-align: center; vertical-align: middle;'><?php print htmlspecialchars($item['email']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>