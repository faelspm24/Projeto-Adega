<?php
session_start();

if(!isset($_SESSION['login'])){
  header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title> Formulário Produtor </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="POST">
<div class="container">
  <div class="row">
    <div class="col">
      <br><br>
<h3 class=""> Formulário de Cadastro do Produtor </h3>
<br><br>
<div class="mb-3">
  <label for="name_prod" class="form-label text-dark"> Nome do Produtor </label>
  <input type="text" name="name_prod" class="form-control">
</div>
<div class="mb-3 ">
  <label for="morada_prod" class="form-label text-dark"> Morada do Produtor </label>
  <input type="text" class="form-control" name="morada_prod">
</div>
<div class="mb-3">
  <label for="telefone_prod" class="form-label text-dark"> Telefone de Contato </label>
  <input type="text" class="form-control" name="telefone_prod">
</div>
<div class="mb-3 ">
  <label for="email_prod" class="form-label text-dark"> Email de Contato </label>
  <input type="text" class="form-control" name="email_prod">
</div>
    <div class="input-field col s12">
    <select name="desig_regiao">
      <option value="" disabled selected> Escolha sua Região  </option>
      <?php
    include "conexao.php";
            try {
                $stmt = $conexao->prepare("SELECT * FROM regiao WHERE regiao_user_id=$_SESSION[login]");
                if($stmt->execute()){
                    while($rs = $stmt->fetch(PDO::FETCH_OBJ)){
                        echo " <option value='{$rs -> regiao_id}'> {$rs -> desig_regiao}</option>";
                    }
                }
            } catch (PDOException $erro) {
                echo "Erro na conexão:" . $erro->getMessage();
            }
        ?>
    </select>
  </div>
<br>
<button type="submit" class="btn btn-dark"> Cadastrar </button>
<button type="reset" class="btn btn-dark"> Cancelar </button>
</div>
    </div>
  </div>
  <br>
<br><br>
<br><br>
<br><br>
<br>
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



<?php
if($_POST){
$nameprod = $_POST['name_prod'];
$moradaprod = $_POST['morada_prod'];
$telefoneprod = $_POST['telefone_prod'];
$emailprod = $_POST['email_prod'];
$desig = $_POST['desig_regiao'];
$prodid = $_SESSION['login'];


include "conexao.php";

$st = $conexao->prepare("INSERT INTO produtor(nome_produtor, morada_produtor, telefone, email, produtor_id, produtor_user_id ) VALUES (:nameprod, :moradaprod, :telefoneprod, :emailprod, :desig, :prodid)");
$st->bindValue(':nameprod',$nameprod);
$st->bindValue(':moradaprod',$moradaprod);
$st->bindValue(':telefoneprod',$telefoneprod);
$st->bindValue(':emailprod',$emailprod);
$st->bindValue(':desig',$desig);
$st->bindValue(':prodid',$prodid);


if($st->execute()){
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