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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body>
<table class=" table table-dark table-bordered text-white">
<thead class="text-center">
    <th>
        ID da Região
    </th>
    <th>
        Localização
    </th>
    <th>
        Alterar
    </th>
    <th>
        Excluir
    </th>
</thead>
<tbody>
<?php
            include "conexao.php";
            try {
                $stmt = $conexao->prepare("SELECT * FROM regiao WHERE regiao_show = 0 AND regiao_user_id= $_SESSION[login] ORDER BY regiao_id DESC;");
                if($stmt->execute()){
                    while($rs = $stmt->fetch(PDO::FETCH_OBJ)){
                        echo"<tr>
                            <td>{$rs->regiao_id}</td>
                            <td>{$rs->desig_regiao}</td>
                            <td><a class='btn btn-primary p-3 m-2 rounded-4 text-center' href='atualizar_regiao.php?cod={$rs->regiao_id}'><i class='material-icons'>add</i></a</td>
                            <td><a class='btn btn-primary p-3 m-2 rounded-4' href='deletar_regiao.php?cod={$rs->regiao_id}'><i class='material-symbols-outlined'>close</i></a></td>
                            </tr>";
                    }
                }
            } catch (PDOException $erro) {
                echo "Erro na conexão:" . $erro->getMessage();
            }
        ?>
</tbody>
</table>
        </div>
<?php
if($_POST){

$reg = $_POST['nameregiao'];

include "conexao.php";

$st = $conexao->prepare("INSERT INTO regiao(Desig_regiao) VALUES (?)");
$st->bindParam(1,$reg);
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

