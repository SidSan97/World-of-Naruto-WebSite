<?php
session_start();
include('conexao.php');

if (empty($_POST['username']) || empty($_POST['senha']))
{
	header('location: login.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['username']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario ='{$usuario}' and senha=md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1)
{
	$_SESSION['username'] = $usuario;
	header('Location: index.php');
	exit();
} 
else
{
	$_SESSION['nao_autenticado'] = true;
  	header('Location: login.php');
  	exit();
}
