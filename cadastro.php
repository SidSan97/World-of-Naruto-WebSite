<?php
session_start();
include('conexao.php');

$nome      = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$email     = mysqli_real_escape_string($conexao, $_POST['email']);
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha     = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$senha2    = mysqli_real_escape_string($conexao, trim(md5($_POST['senha2'])));

//CONSULTA SE HÁ OUTRO USUARIO COM MESMO NOME DE USUARIO
$sql = "SELECT * FROM usuario WHERE usuario = '{$usuario}'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row > 0)
{
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastrar.php');
    exit;
}

//CONSULTA SE HÁ OUTRO USUARIO COM MESMO EMAIL
$sql = "SELECT * FROM usuario WHERE email = '{$email}'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row > 0)
{
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastrar.php');
    exit;
}

//VERIFICA SE AS SENHAS SÃO DIFERENTES
if($senha !== $senha2)
{
    $_SESSION['senhas_diferentes'] = true;
    header('Location: cadastrar.php');
    exit;
}

$sql = "INSERT INTO usuario (nome, sobrenome, email, usuario, senha, data_cadastro) VALUES (
                    '" . $nome . "', 
                    '" . $sobrenome . "',
                    '" . $email . "', 
                    '" . $usuario . "', 
                    '" . $senha . "',                 
                    NOW())";

if($conexao->query($sql) === TRUE)
{
    $_SESSION['status_cadastro'] = true;
    echo "Cadastro feito com sucesso!";
} 

else{
echo "Cadastro nao realizado";
die($conexao->error);
}

$conexao->close();
header('Location: cadastrar.php');
exit;