<?php
require_once '../config/database.php';
require_once '../models/Book.php';
require_once '../controllers/BookController.php';

$controller = new BookController();
$books = $controller->getBooks();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
    <h1>📚 Lista książek</h1>
    <a href="../views/add_book.php" class="btn btn-primary mb-3">➕ Dodaj książkę</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tytuł</th><th>Autor</th><th>Gatunek</th><th>Rok</th><th>Akcja</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= htmlspecialchars($book['title']) ?></td>
                <td><?= htmlspecialchars($book['author']) ?></td>
                <td><?= htmlspecialchars($book['genre']) ?></td>
                <td><?= htmlspecialchars($book['year']) ?></td>
                <td>
                    <a href="delete_book.php?id=<?= $book['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Na pewno usunąć?')">Usuń</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>