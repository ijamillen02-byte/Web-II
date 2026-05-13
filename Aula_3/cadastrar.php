<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];



$sql = "INSERT INTO alunos(nome, email)
VALUES ('$nome', '$email') ";
if($conexao->query($sql) === TRUE){
    echo "Cadastro Realizado!";
} else{
    echo "Erro ao cadastrar.";
}

echo '<br>';
echo '<br>';
$conexao->close();


?>