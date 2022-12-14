<?php

session_start();



if($_POST){
$usu = $_POST['txtnome'];
$sen = $_POST['txtsenha'];

include "conexao.php";

$st = $conexao->prepare("SELECT * FROM cadastro WHERE cad_usuario = ? AND cad_senha = ?;");
$st->bindParam(1,$usu);
$st->bindParam(2,$sen);
if($st ->execute()){
if($rs = $st->fetch(PDO::FETCH_OBJ)){
    $_SESSION['login'] = $rs->cad_id;
    header("location: vinhos.php");
}else{
    echo"Erro, não existe nenhum usuário cadastrado com esse nome. ";
        header("refresh: 3, vinhos.php");

}
}else{
echo"Erro no execute()";
}
}
?>