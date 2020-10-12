<?php
$id = $_POST["id"];
$password = $_POST["password"];


$message = "NG";
if ($id === "Andy" && $password === "secret") {
  $message = "OK";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>sample php</title>
</head>
<body>
  <h1>Login<?php echo $message; ?></h1>
</body>
</html>