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
    <title> Formulário Região </title>
</head>
<body>
<form action="" method="POST">
<div class="container text-center">
    <br><br>
    <br>
      <h3 id="titleform"> Formulário de Cadastramento de Região <br></h3>
  <div class="row">
  <div class="col">
<br><br>
<br><br>
<div class="mb-3">
  <label  id="regiaolabel" for="desig_regiao" class="form-label text-dark"> Digite sua Região </label>
  <br><br>
  <input type="text" name="desig_regiao" class="form-control" required>
</div>
<br>
<button type="submit" class="btn btn-lg btn-dark"> Cadastrar </button>
<button type="reset" class="btn btn-lg btn-dark "> Cancelar </button>
</form>
</div>
</div>
</div>
<br><br>
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
<?php
if($_POST){

$nameregiao = $_POST['desig_regiao'];
$regiaoid = $_SESSION['login'];

include "conexao.php";
print_r($regiaoid);

$st = $conexao->prepare("INSERT INTO regiao(desig_regiao, regiao_user_id) VALUES (:nameregiao, :regiaoid)");
$st->bindValue(':nameregiao',$nameregiao);
$st->bindValue(':regiaoid',$regiaoid);


if($st ->execute()){
if($st->rowCount()>0){
    echo"<script>alert('Cadastro realizado com sucesso!');</script>";
    header("refresh: 3, home.php");
}else{
    echo"Erro nenhuma linha executada";
}

}else{
echo"Erro no execute()";
}
}
?>

</body>
</html>