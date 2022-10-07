<?php

    include 'conexao.php';
    $id = $_POST['id'];

    $idCliente     =  $_POST['idCliente'];
    $nome          =  $_POST['nome'];
    $idade         =  $_POST['idade'];
    $cep           =  $_POST['cep '];
    $cpf           =  $_POST['cpf'];
    $email         =  $_POST['email'];

    $sql = "UPDATE `cliente` SET `nome`='$nome',`idade`=$idade,
    `cep`='$cep',`cpf`='$cpf',`email`='$email' WHERE idCliente = $id";


    $atualizar = mysqli_query($conexao,$sql);




?>

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <h4>Cliente Atualizado com Sucesso!</h4>

    <div>
        <a href="listarCliente" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>