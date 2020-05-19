<?php
$host = "localhost";
$db = "cms";
$user = "cms_user";
$pass = "userpass";

$conn = mysqli_connect($host, $user, $pass, $db) or exit("Unable to connect to database: " . mysqli_connect_error());

$sql = "SELECT * FROM article ORDER BY published_at";
$result = mysqli_query($conn, $sql);

if(!$result) {
    echo mysqli_error($conn) . PHP_EOL;
} else {
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <ul>
        <?php if(empty($articles)): ?>
            <p>Nothing has been posted yet.</p>
        <?php else: ?>
            <?php foreach($articles as $index => $article): ?>
                <li>
                    <article>
                        <h2><?= $article["title"]; ?></h2>
                        <p><?= $article["content"] ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>
</html>