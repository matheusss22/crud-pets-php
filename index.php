<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Cadastro de Pets</title>
</head>
<body>

  <!-- Barra de navegação via Bootstrap-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid w-100">
      <a class="navbar-brand" href="#">🐶Cadastro de Pets🐶</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php" >Casinha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo Pet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar Pets</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Templates -->
  <div class="container">
    <div class="row mt-5">
      <div class="col mt-5">
        <?php
          include("config.php");
          switch(@$_REQUEST["page"]){
            case "novo":
              include("novo-pet.php");
              break;
            case "listar":
              include("listar-pets.php");
              break;
            case "salvar":
              include("salvar-pet.php");
              break;
            case "editar":
              include("editar-pet.php");
            default:
              print "<h1>Bem vindo!<h1>";
          }
        ?>
      </div>
    </div>
  </div>
  
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>