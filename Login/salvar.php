<?php
    session_start();
    include('conecta.php');

    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dtnasc = $_POST["dtnasc"];
    $senha1 = md5($_POST["senha1"]);
    $senha2 = md5($_POST["senha2"]);

    if($senha1 != $senha2)
    {
        $_SESSION["invalido"] = true;
        $_SESSION["msg"] = "As senhas devem ser iguais";
        header("Location: cadastro.php");
    }
    
    $sqlins = "INSERT INTO `usuario`(`email`,`senha`,`nome`,`dtnasc`,`cpf`) VALUES ('$email', '$senha1', '$nome','$dtnasc','$cpf')";
    $consulta = "SELECT * FROM usuario WHERE email='$email'and senha='$senha1'and nome='$nome'and dtnasc='$dtnasc'and cpf='$cpf'";
    $resultado = mysqli_query($conexao, $consulta);
    $usuario = mysqli_fetch_assoc($resultado);
    $qtdeLinhas = mysqli_num_rows($resultado);

    $resultado = mysqli_query($conexao, $sqlins);

    if(!$resultado)
    {
        echo "Deu certo não";
    }
?>