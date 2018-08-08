<!doctype html>
<html>
<head>
  <title>Home page of the user</title>
  <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="jumbotron jumbotron-text-centered jumbotron-fliud" style="margin-top:100px;margin-left:200px;margin-right:200px">
      <h1>Welcome

<?php

  $name=$_POST['name'];

  echo $name;
?>

</h1>
 </div>
</div>
</body>
</html>
