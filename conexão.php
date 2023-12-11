<?php

$servidor = 'localhost';
$login = 'root';
$senha = 'root';
$banco = 'db_sistema';

$conexao = mysqli_connect($servidor, $login, $senha, $banco);

$nome = $_POST['user'];
$sexo = $_POST['sexo'];
if ($sexo == 'on'){
    $sexo = "Feminino";
}
else{
    $sexo = "Masculino";
}

$insert = "INSERT INTO tb_user VALUES (NULL, '$nome', '$sexo','???');";

$sql = mysqli_query($conexao, $insert);

?>