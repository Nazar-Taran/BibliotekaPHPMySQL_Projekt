<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj książkę</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
    <h1>Dodaj książkę</h1>
    <form action="../public/add_book.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Tytuł</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input type="text" class="form-control" name="author">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Gatunek</label>
            <input type="text" class="form-control" name="genre">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Rok</label>
            <input type="number" class="form-control" name="year">
        </div>
        <button type="submit" class="btn btn-success">Dodaj</button>
        <a href="../public/index.php" class="btn btn-secondary">Powrót</a>
    </form>
</body>
</html>
