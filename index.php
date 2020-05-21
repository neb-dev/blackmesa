<?php
require "includes/database.php";

$sql = "SELECT * FROM article ORDER BY published_at";
$result = mysqli_query($conn, $sql);

if(!$result) {
    echo mysqli_error($conn) . PHP_EOL;
} else {
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC); 
}
?>

<?php require "includes/header.php"; ?>
    <?php if(empty($articles)): ?>
        <p>Nothing has been posted yet.</p>
    <?php else: ?>
        <ul>
            <?php foreach($articles as $index => $article): ?>
                <li>
                    <article>
                        <h2><a href="article.php?id=<?= $article['id'] ?>"><?= $article["title"]; ?></a></h2>
                        <p><?= $article["content"] ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php require "includes/footer.php"; ?>
