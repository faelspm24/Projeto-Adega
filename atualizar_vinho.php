<?php
if($_GET){
$id = $_GET['cod'];

include "conexao.php";

$st = $conexao->prepare("SELECT * FROM vinho WHERE vinho_id = ? ;");
$st->bindParam(1, $id);

if($st -> execute()){
if($rs = $st -> fetch(PDO::FETCH_OBJ)){
$nomevinho = $rs -> nome_vinho;
$anovinho = $rs -> ano_vinho;
$cor = $rs -> cor;
$grau = $rs -> grau;
$preco = $rs -> preco;


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
    <h4> Formulário de Atualização de Vinho </h4>
    <div class="row">
        <div>
            <div class="row">
            <br><br><br><br>
                 <div>
                     <label for="nome_vinho"> NOME DO VINHO </label>
                    <input name="nome_vinho" type="text" class="validate" required value="<?php
                    echo $nomevinho;
                    ?>">
                </div>
            </div>
            <div class="row">
            <br><br><br>
                 <div>
                    <label for="ano_vinho"> ANO DO VINHO </label>
                    <input name="ano_vinho" type="text" class="validate" required value=" <?php
                    echo $anovinho;
                    ?>" >
                 </div>
            </div>
            <div class="row">
            <br><br>
                <div>
                    <label for="cor_vinho"> COR DO VINHO </label>
                    <input name="cor_vinho" type="text" class="validate" required  value="<?php
                    echo $cor;
                    ?>">
                </div>
                <div class="row">
                <br><br><br>
                    <div>
                        <label for="preco_vinho"> PREÇO DO VINHO </label>
                        <input name="preco_vinho" type="text" class="validate" required  value="<?php
                    echo $preco;
                    ?>">
                    </div>
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
$nomevinho = $_POST['nome_vinho'];
$anovinho = $_POST['ano_vinho'];
$corvinho = $_POST['cor_vinho'];
$grauvinho = $_POST['grau_vinho'];
$precovinho = $_POST['preco_vinho'];


include "conexao.php";

$st = $conexao->prepare("UPDATE vinho SET nome_vinho = ?, ano_vinho = ?, cor = ?, grau = ?, preco = ? WHERE vinho_id = ?;");
$st->bindParam(1,$nomevinho);
$st->bindParam(2,$anovinho);
$st->bindParam(3,$corvinho);
$st->bindParam(4,$grauvinho);
$st->bindParam(5, $precovinho); 
$st->bindParam(6,$id);

if($st ->execute()){
if($st->rowCount()>0){
    echo "Tabela vinho atualizado com sucesso!";
        header("location: vinhos.php");

}else{
    echo"Erro ao atualizar tabela. ";
        header("refresh: 3, index.php");

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





