<?php
    include 'conexao.php';
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Edição de Clientes</title>
</head>

<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="atualizarCliente.php" method="POST">
                <?php

                $sql = "SELECT * FROM `cliente` WHERE idCliente = $id";

                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                        $idCliente      =  $array['idCliente'];
                        $nome           =  $array['nome'];
                        $idade          =  $array['idade'];
                        $cep            =  $array['cep'];
                        $cpf            =  $array['cpf'];
                        $email          =  $array['email'];
                ?>


                <h3 style="text-align: center">Edição de Clientes</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none ;">
                </div>

                <div class="form-group">
                    <label>Idade</label>
                    <input type="number" class="form-control" name="idade" value="<?php echo $idade ?>">
                </div>

                <div class="form-group">
                    <label>Cep</label>
                    <input type="text" class="form-control" name="cep" value="<?php echo $cep ?>">
                </div>

                <div class="form-group">
                    <label>Cpf</label>
                    <input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </div>

                <div class="botao">
                    <button type="submit" class="btn btn-secondary botao">Finalizar</button>
                </div>
                
                    
                <?php } ?>
            </form>
        </div>
    </section>
</body>
</html>