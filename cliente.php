<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Clientes</title>
</head>

<body>
    <section>
        <div class="container tamanhoFormulario">
            <form action="inserirCliente.php" method="POST">
                <h3 style="text-align: center">Cadastro de Clientes</h3>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Entre com o seu nome:" required>
                </div>
                <div class="form-group">
                    <label>Idade</label>
                    <input type="number" class="form-control" name="idade" placeholder="Entre com sua idade:" required>
                </div>
                <div class="form-group">
                    <label>Cep</label>
                    <input type="text" class="form-control" name="cep" placeholder="Entre com o seu Cep:" required>
                </div>
                <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" name="cpf" placeholder="Entre com o seu Cpf:" required>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="Entre com o seu E-mail:" required>
                </div>
                <div class="botao">
                    <button type="submit" class="btn btn-secondary botao">Cadastrar</button>
                </div>
                
                    
            </form>
        </div>
    </section>
</body>
</html>