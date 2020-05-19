<?php
  $age = 29;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if($age < 21): ?>
    <p>You're too young!</p>
  <?php elseif($age == 21): ?>
    <p>Old enough!</p>
  <?php else: ?>
    <p>Age is just a number!</p>
  <?php endif; ?>
</body>
</html>