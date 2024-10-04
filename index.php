<?php
// URL API untuk mengambil data dari JSONPlaceholder
$url = 'https://jsonplaceholder.typicode.com/posts';

// Mengambil data dari API
$response = file_get_contents($url);

// Mengubah data JSON menjadi array asosiatif
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Posts (PHP)</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Data Posts dari JSONPlaceholder API (PHP)</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody> <!-- Koreksi penulisan 'tbody' -->
            <?php foreach($data as $post): ?> <!-- Menghilangkan titik koma di sini -->
            <tr>
                <td><?php echo $users['id']; ?></td>
                <td><?php echo htmlspecialchars($users['title']); ?></td>
                <td><?php echo htmlspecialchars($users['body']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
