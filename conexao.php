<?php
$servidor = "localhost";
$usuario = "root"; //Usuário Padrão
$senha = ""; //Senha Padrão
$banco = "comunicacao_interna";

//Estabelece Conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//Verifica se a conexão foi estabelecida corretamente
if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>