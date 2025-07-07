<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //Comando para o SQL excluir o comunicado com o ID
    $stmt = mysqli_prepare($conexao, "DELETE FROM comunicados WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Comunicado excluído com sucesso!";
    } else {
        echo "Erro ao excluir o comunicado: " . mysqli_error($conexao);
    }
    mysqli_stmt_close($stmt);

} else {
    echo "ID do comunicado não fornecido.";
}

mysqli_close($conexao);

header("refresh:2;url=index.php");
exit();
?>