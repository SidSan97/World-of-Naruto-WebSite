<?php

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$database = "world_of_naruto";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database) or die ('Não foi possivel conectar');
mysqli_set_charset($conexao,"utf8");
