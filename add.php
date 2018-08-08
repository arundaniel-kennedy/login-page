<html><head></head><body>
<?php

  echo "entering data<br>";

$user = 'root';
$password = 'root';
$db = 'user';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$per = mysqli_connect($host,$user,$password,$db,$port);

if (!$per) {
  die("Connection failed: " . mysqli_connect_error());
}

  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];

  $sql = "INSERT INTO data (sno,name,email,password,gender,age) VALUES (null,'$name','$email','$password','$gender', $age )";

  if (mysqli_query($per, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($per);
}

  header("refresh:0.0001 ; url=home.php");

?>
</body></html>
