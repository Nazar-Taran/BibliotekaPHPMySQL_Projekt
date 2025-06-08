<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <h1>Lista książek</h1>
    <table>
        <tr><th>Tytuł</th><th>Autor</th><th>Gatunek</th><th>Rok</th></tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book['title']) ?></td>
            <td><?= htmlspecialchars($book['author']) ?></td>
            <td><?= htmlspecialchars($book['genre']) ?></td>
            <td><?= htmlspecialchars($book['year']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>