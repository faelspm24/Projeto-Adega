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
    <link rel="stylesheet" href="style.css">
    <title> Alterar e Excluir Cadastro Produtores </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<table class="table table-dark table-bordered">
<thead class="text-center">
    <th>
        ID
    </th>
    <th>
        Produtor
    </th>
    <th>
        Morada
    </th>
    <th>
        Telefone
    </th>
    <th>
        Email
    </th>
    <th>
        Região
    </th>
    <th>
        Atualizar
    </th>
    <th>
         Excluir
    </th>
   
</thead>
<tbody>
<?php

    include "conexao.php";
            try {
                $stmt = $conexao->prepare("SELECT * FROM produtor p, regiao r WHERE regiao_id= produtor_id AND produtor_user_id= $_SESSION[login] AND regiao_show = 0 ORDER BY produtor_id DESC;
");
                if($stmt->execute()){
                    while($rs = $stmt->fetch(PDO::FETCH_OBJ)){
                        echo"<tr>
                            <td>{$rs->produtor_id}</td>
                            <td>{$rs->nome_produtor}</td>
                            <td>{$rs->morada_produtor}</td>
                            <td>{$rs->telefone}</td>
                            <td>{$rs->email}</td>
                             <td>{$rs->desig_regiao}</td>
                            <td><a class='btn btn-primary p-3 m-2 rounded-4 ' href='atualizar_cadastro_produtor.php?cod={$rs->produtor_id}'><i class='material-icons'>add</i></a></td>
                            <td><a class='btn btn-primary p-3 m-2 rounded-4' href='deletar_produtor.php?cod={$rs->produtor_id}'><i class='material-symbols-outlined'>close</i></a></td>
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
</body>
</html>

