<?php
  $server = "localhost";
  $username = "root";
  $password = "";

  $conn = new mysqli($server, $username, $password);
  if($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['submit'])) {
    $formUsername = $_POST["formUsername"];
    $formPassword = $_POST["formPassword"];

    $sql = "SELECT username FROM user WHERE username = '$formUsername' AND password = '$formPassword'";
    echo $sql;
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)) {
      echo "<p>";
      echo $row["username"];
      echo "</p>";
    }
  }
  $conn->close();
?>