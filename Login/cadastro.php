<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="bulma.min.css" rel="stylesheet">
    <title>Etec Cadastro & Login</title>
</head>
<body>
    <section class="is-fullheight">
        <div class="container has-text-centered">
            <h2 class="title">Sistema de Cadastro Etec</h2>
            <?php if(isset($_SESSION["invalido"])){?>
                <div class="notification is-danger">
                    <p>Erro: Usuário ou senha inválidos!</p>
                </div>
                <?php };
                unset($_SESSION["invalido"]);
                ?>
                <form accept-charset="UTF-8" action="salvar.php" autocomplete="off" method="POST" target="_blank">
                    <p>E-mail</p><input id="email" name="email" type="email" value="" required/>
                    <p>Nome</p><input id="nome" name="nome" type="text" value="" required/>
                    <p>CPF</p><input id="cpf" name="cpf" type="text" value=""/>
                    <p>Data de Nascimento</p><input id="dtnasc" name="dtnasc" type="date" value=""/>
                    <p>Senha</p><input id="senha1" name="senha1" type="Password" value="" required parttern="^(?=,*[a-z])(?=,*[A-Z])(?=,*[0-9]).{3,}$"/>
                    <p>Confirmar Senha</p><input id="senha2" name="senha2" type="Password" value="" required parttern="^(?=,*[a-z])(?=,*[A-Z])(?=,*[0-9]).{3,}$"/>
                    <br>
                    <br>
                    <button class="button" type="submit" value="Submit">Cadstrar</button>
                </form>
        </div>
    </section>
</body>
</html>