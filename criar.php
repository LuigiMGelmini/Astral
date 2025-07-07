<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Comunicado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Criar Novo Comunicado</h1>
        <form action="salvar.php" method="POST">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título do Comunicado</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="6" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Salvar Comunicado</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>