<?php
require "includes/database.php";

if(isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $sql = "SELECT * FROM article WHERE id = " . $_GET["id"];
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        echo mysqli_error($conn) . PHP_EOL;
    } else {
        $article = mysqli_fetch_assoc($result); 
    }
} else {
    $article = null;
}
?>

<?php require "includes/header.php"; ?>
    <?php if($article === null): ?>
        <p>Blog post not found.</p>
    <?php else: ?>
        <ul>
            <li>
                <article>
                    <h2><?= $article["title"]; ?></h2>
                    <p><?= $article["content"] ?></p>
                </article>
            </li>
        </ul>
    <?php endif; ?>
<?php require "includes/footer.php"; ?>
