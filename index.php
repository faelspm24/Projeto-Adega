


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<form action="valida_login_usuario.php" method="POST">
<div id="containerindex" class="container text-center">
  <br><br>
<div class="row text-center">
<br><br>
<br><br>
    <br><br>
<div class="mb-3">
  <label for="txtnome" class="form-label text-dark"> Nome do usuário </label>
  <input type="text" name="txtnome" class="form-control">
</div>
<div class="mb-3">
  <label for="txtsenha" class="form-label text-dark"> Senha </label>
  <input type="password" name="txtsenha" class="form-control">
</div>
</div>
<br>
<button type="submit" class="btn btn-dark"> Entrar </button>
<button type="reset" class="btn btn-dark"> Cancelar </button>
<br><br>


  <label class="form-label text-dark"> Não tem cadastro? <a href="form_cadastro_usuario.php">Clique aqui</a> </label>

</div>

</form>
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