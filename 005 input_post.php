<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - GET AN INPUT VALUE</title>
</head>

<body>

  <form method="post">
    Username:<input type="text" name="name">
    Password: <input type="password" name="password">
    <input type="submit" value="Submit">
  </form>

  <?php
  echo "<br> your name is: ". $_POST["name"];
  echo "<br> the password is: ". $_POST["password"];
  ?>


</body>

</html>