<?php
include 'conexao.php';

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

//Verifica se o  id (hidden) foi enviado corretamente
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id']; //Se sim, atualiza

    $stmt = mysqli_prepare($conexao, "UPDATE comunicados SET titulo = ?, conteudo = ? WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "ssi", $titulo, $conteudo, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Comunicado atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o comunicado: " . mysqli_error($conexao);
    }
    mysqli_stmt_close($stmt);

    //Se não, cria
} else {

    $stmt = mysqli_prepare($conexao, "INSERT INTO comunicados (titulo, conteudo) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $titulo, $conteudo);

    //Executa a query
    if (mysqli_stmt_execute($stmt)) {
        echo "Comunicado cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o comunicado: " . mysqli_error($conexao);
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($conexao);

//Volta para a página inicial
header("refresh:2;url=index.php");
exit();
?>