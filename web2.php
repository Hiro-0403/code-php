<?php
$name = file("name.txt", FILE_IGNORE_NEW_LINES);
$date = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
 <h1>Names</h1>
 <ul>
 <?php
  for ($i = 0; $i < count($name); $i++) {
 ?>
 <li><?php echo $name[$i]; ?></li>
 <?php
  }
 ?>
 </ul>
 <hr>
 <P><?php echo $date; ?></P>
</body>
</html>