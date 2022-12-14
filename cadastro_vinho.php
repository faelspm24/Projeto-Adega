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
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<div class="container">
    <div class="row">
        <div class="col">
        <br><br>
<h3> Formulário de Cadastro de Vinho </h3>
<br><br>
<div class="mb-3">
  <label for="nome_vinho" class="form-label text-dark"> Nome  do Vinho </label>
  <input type="text" name="nome_vinho" class="form-control">
</div>
<div class="mb-3 ">
  <label for="ano_vinho" class="form-label text-dark"> Ano do Vinho </label>
  <input type="text" class="form-control" name="ano_vinho">
</div>
<div class="mb-3">
  <label for="cor_vinho" class="form-label text-dark"> Cor do Vinho </label>
  <input type="text" class="form-control" name="cor_vinho">
</div>
<div class="mb-3 ">
  <label for="grau_vinho" class="form-label text-dark"> Grau do Vinho </label>
  <input type="text" class="form-control" name="grau_vinho">
</div>
<div class="mb-3 ">
  <label for="preco_vinho" class="form-label text-dark"> Preço do Vinho </label>
  <input type="text" class="form-control" name="preco_vinho">
</div>
<div class="input-field col s12">
    <select name="produtor_id">
      <option value="" disabled selected> Escolha o Produtor  </option>
      <?php
    include "conexao.php";
            try {
                $stmt = $conexao->prepare("SELECT * FROM produtor WHERE produtor_user_id=$_SESSION[login];");
                if($stmt->execute()){
                    while($rs = $stmt->fetch(PDO::FETCH_OBJ)){
                        echo " <option value='{$rs -> produtor_id}'> '{$rs -> nome_produtor}'</option>";
                    }
                }
            } catch (PDOException $erro) {
                echo "Erro na conexão:" . $erro->getMessage();
            }
        ?>
    </select>
  </div>
<br><br>
<button type="submit" class="btn btn-dark"> Cadastrar </button>
<button type="reset" class="btn btn-dark"> Cancelar </button>
</div>
    </div>
  </div>
  <br>
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
$nomevinho = $_POST['nome_vinho'];
$anovinho = $_POST['ano_vinho'];
$corvinho = $_POST['cor_vinho'];
$grauvinho = $_POST['grau_vinho'];
$precovinho = $_POST['preco_vinho'];
$produtor_id = $_POST['produtor_id'];
$vinho_user_id = $_SESSION['login'];


include "conexao.php";

$st = $conexao->prepare("INSERT INTO vinho(nome_vinho, ano_vinho, cor, grau, preco, produtor_id, vinho_user_id) VALUES (:nomevinho, :anovinho, :corvinho, :grauvinho, :precovinho, :produtor_id, :vinho_user_id)");
$st->bindValue(':nomevinho', $nomevinho);
$st->bindValue(':anovinho', $anovinho);
$st->bindValue(':corvinho', $corvinho);
$st->bindValue(':grauvinho', $grauvinho); 
$st->bindValue(':precovinho', $precovinho);
$st->bindValue(':produtor_id', $produtor_id); 
$st->bindValue(':vinho_user_id', $vinho_user_id); 




if($st->execute()){
if($st->rowCount()>0){
    echo"<script>alert('Cadastro  do vinho realizado com sucesso!');</script>";
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