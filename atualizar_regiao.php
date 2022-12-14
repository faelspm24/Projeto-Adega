<?php
if($_GET){
$id = $_GET['cod'];

include "conexao.php";

$st = $conexao->prepare("SELECT * FROM regiao WHERE regiao_id = ?;");
$st->bindParam(1, $id);

if($st -> execute()){
if($rs = $st -> fetch(PDO::FETCH_OBJ)){
$locregiao = $rs -> desig_regiao;

}else{
    echo"Erro ao atualizar tabela. ";
    header("refresh: 3, index.php");
    }
}else{
echo"Erro no execute()";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<div class="container center">
    <h4> Formulário de Atualização de Região </h4>
    <div class="row">
        <div>
            <div class="row">
            <br><br><br>
                 <div>
                    <label for="locregiao"> Localização Região </label>
                    <input name="locregiao" type="text" class="validate" required value=" <?php
                    echo $locregiao;
                    ?>" >
                 </div>
            </div>
        </div>
    </div>
    <button type="submit" class="waves-effect waves-light btn-large">Atualizar 
        <i class="large material-icons right">arrow_forward</i>
    </button> 
    <button class="waves-effect waves-light btn-large" type="reset">Cancelar</button>
    <br><br><br><br>
</div>
</form>
<?php
if($_POST){
$reg = $_POST['locregiao'];

include "conexao.php";

$st = $conexao->prepare("UPDATE regiao SET desig_regiao = ? WHERE regiao_id = ?");
$st->bindParam(1,$reg);
$st->bindParam(2,$id);
if($st ->execute()){
if($st->rowCount()>0){
    echo "<script> alert('Cadastro atualizado com sucesso!');</script>";
         header("location: vinhos.php");

}else{
    echo"Erro, nenhuma linha executada ";
    
}
}else{
echo"Erro no execute()";
}
}
?>
<script src="materialize/js/materialize.js"></script>
<script>
    M.AutoInit();
</script>
</body>
</html>