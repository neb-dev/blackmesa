<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        require "includes/database.php";

        $sql = "INSERT INTO article (title, content) VALUES (
            '" . $_POST['title'] . "',
            '" . $_POST['content'] . "'
        )";

        echo($sql);

        $result = mysqli_query($conn, $sql);

        if(!$result) {
            echo mysqli_error($conn) . PHP_EOL;
        } else {
            $id = mysqli_insert_id($conn);
            echo "New Article ID: $id";
        }
    }
?>

<?php require "includes/header.php"; ?>
<h2></h2>
<form method="post">
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Article Title">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea rows="4" cols="40" name="content" id="content" placeholder="Article content goes here."></textarea>
    </div>
    <div>
        <label for="published_at">Date and Time</label>
        <input type="datetime-local" name="published_at" id="published_at">
    </div>
    <input type="submit" value="Create Article">
</form>
<?php require "includes/footer.php"; ?>