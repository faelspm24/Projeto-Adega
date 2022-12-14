<?php
if($_POST){
$usu = $_POST['txtnome'];
$sen = $_POST['txtsenha'];

include "conexao.php";

$st = $conexao->prepare("INSERT INTO cadastro(cad_usuario, cad_senha) VALUES (?,?)");
$st->bindParam(1,$usu);
$st->bindParam(2,$sen);

if($st ->execute()){
if($st->rowCount()>0){
    echo"<script>alert('Cadastro realizado com sucesso!');</script>";
    header("refresh: 3, vinhos.php");
}else{
    echo"Erro nenhuma linha executada";
}

}else{
echo"Erro no execute()";
}
}
?>