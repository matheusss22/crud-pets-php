<!-- Configuração da conexão com banco de dados -->
<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'db_cadastro_pets');

    try {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $conn = new MySQLi(HOST, USER, PASS, BASE);
        $conn->set_charset('utf8mb4');
?>
        
    <!-- Conexão bem-sucedida! -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Conexão com banco de dados bem-sucedida!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php } catch (mysqli_sql_exception $e) { ?>

    <!-- Mesagem de erro -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= htmlspecialchars($e->getMessage()); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php } ?>
