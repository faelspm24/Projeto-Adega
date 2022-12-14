<?php
if($_GET){
$id = $_GET['cod'];

include "conexao.php";

$st = $conexao->prepare("SELECT * FROM produtor WHERE Produtor_ID = ?;");
$st->bindParam(1, $id);

if($st -> execute()){
if($rs = $st -> fetch(PDO::FETCH_OBJ)){
$nameprod = $rs -> Nome_Produtor;
$moradaprod = $rs -> Morada_Produtor;
$telefoneprod = $rs -> Telefone;
$emailprod = $rs -> Email;

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
    <h4> Formulário de Atualização do Produtor </h4>
    <div class="row">
        <div>
            <div class="row">
            <br><br><br><br>
                 <div>
                     <label for="name_prod"> NOME DO PRODUTOR </label>
                    <input name="name_prod" type="text" class="validate" required value="<?php
                    echo $nameprod;
                    ?>">
                </div>
            </div>
            <div class="row">
            <br><br><br>
                 <div>
                    <label for="morada_prod"> MORADA DO PRODUTOR </label>
                    <input name="morada_prod" type="text" class="validate" required value=" <?php
                    echo $moradaprod;
                    ?>" >
                 </div>
            </div>
            <div class="row">
            <br><br>
                <div>
                    <label for="telefone_prod"> TELEFONE DE CONTATO </label>
                    <input name="telefone_prod" type="text" class="validate" required  value="<?php
                    echo $telefoneprod;
                    ?>">
                </div>
                <div class="row">
                <br><br><br>
                    <div>
                        <label for="email_prod"> EMAIL DE CONTATO </label>
                        <input name="email_prod" type="text" class="validate" required  value="<?php
                    echo $emailprod;
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
$nameprod = $_POST['name_prod'];
$moradaprod = $_POST['morada_prod'];
$telefoneprod = $_POST['telefone_prod'];
$emailprod = $_POST['email_prod'];

include "conexao.php";

$st = $conexao->prepare("UPDATE produtor SET Nome_Produtor = ?, Morada_Produtor = ?, Telefone = ?, Email = ? WHERE Produtor_ID = ?;");
$st->bindParam(1,$nameprod);
$st->bindParam(2,$moradaprod);
$st->bindParam(3,$telefoneprod);
$st->bindParam(4,$emailprod);
$st->bindParam(5,$id);

if($st ->execute()){
if($st->rowCount()>0){
    header("location: home.php");
    echo "Tabela cadastro atualizado com sucesso!";
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













