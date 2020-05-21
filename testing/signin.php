<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  
  $conn = new mysqli($server, $username, $password);
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo "Connected!";
  }

  // $result = $conn->query('SHOW databases');
  // foreach( $result as $row ) {
  //   echo join(', ', $row), "<br />\r\n";
  // }
  $sql = "SELECT username FROM 'user'";
  $result = $conn->query($sql) or die($conn->error);

  while($row = $result->fetch_assoc()) {
    echo "Username: " . $row["username"] . " Password: " . $row["password"];
  }

  $conn->close();
?>
