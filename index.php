<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicados Internos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Mural de Comunicados</h1>
            <a href="criar.php" class="btn btn-primary">Novo Comunicado</a>
        </div>

        <?php
        include 'conexao.php';

        $sql = "SELECT id, titulo, conteudo, DATE_FORMAT(data_criacao, '%d/%m/%Y às %H:%i') as data_formatada FROM comunicados ORDER BY data_criacao DESC";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($comunicado = mysqli_fetch_assoc($resultado)) {
        ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($comunicado['titulo']); ?></h5>
                        <p class="card-text"><?php echo nl2br(htmlspecialchars($comunicado['conteudo'])); ?></p>
                        <p class="card-text"><small class="text-muted">Publicado em: <?php echo $comunicado['data_formatada']; ?></small></p>
                        <a href="editor.php?id=<?php echo $comunicado['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="excluir.php?id=<?php echo $comunicado['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este comunicado?');">Excluir</a>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<div class='alert alert-info'>Nenhum comunicado cadastrado ainda.</div>";
        }

        mysqli_close($conexao);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>