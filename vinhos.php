<?php
session_start();

if(!isset($_SESSION['login'])){
  header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
    <title>Home</title>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Menu</a>
      <div class="container">
        <div class="btn-group">
          <button class="btn btn-secondary dropdown-toggle text-white  p-2"  type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
            Produtores
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="form_produtor.php"> Cadastrar Produtor </a></li>
            <li><a class="dropdown-item" href="visualizar_produtor.php"> Alterar e Excluir Produtores Cadastrados </a></li>
          </ul>
        </div>
        <div class="btn-group">
          <button class="btn btn-secondary dropdown-toggle text-white p-2" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
            Regiões  </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="form_regiao.php"> Cadastrar Região </a></li>
            <li><a class="dropdown-item" href="visualizar_regiao.php"> Alterar e Excluir  Regiões Cadastradas </a></li>
          </ul>
        </div>
        <div class="btn-group">
          <button class="btn btn-secondary dropdown-toggle text-white p-2"  type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Vinhos
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cadastro_vinho.php"> Cadastrar Vinho </a></li>
            <li><a class="dropdown-item" href="visualizar_vinhos.php"> Alterar e Excluir Vinhos Cadastrados </a></li>
          </ul>
        </div>
      </div>
    </div>       
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<a class="btn btn-primary" href="exit.php" role="button">Sair</a>
</div>
  </nav>
</header>
<br>
Bem vindo ao Painel, <?php
echo $_SESSION['login']; ?>
<br><br>
<div class="container text-center">
  <div class="row">
    <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=".\img\1.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=".\img\2.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=".\img\3.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<br>
<div class="container text-center">
  <div class="row">
    <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=".\img\4.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=".\img\8.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=".\img\7.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<br>

<br>
<footer id="footerregiao">
  <section>
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Desenvolvido por Rafael Pereira de Vasconcellos
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
</footer>
</body>
</html>




