<?php

include 'conexao.php';

$nome  = $_POST ['nome'];
$idade    = $_POST ['idade'];
$cep     = $_POST ['cep'];
$cpf     = $_POST ['cpf'];
$email    = $_POST ['email'];

$sql = "INSERT INTO `cliente`(`nome`, `idade`, `cep`, `cpf`, `email`) 
VALUES ('$nome',$idade,$cep,'$cpf','$email')";

$inserir = mysqli_query($conexao,$sql);

?>
<div class="container" style="width: 300px; text-aling: center; padding-top: 50px">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <h4>Cliente Castrado com Sucesso!</h4>

            <div>
                <a href="index.php"  role="button" class="btn btn-secondary">Cadastrar</a>
            </div>
</div>