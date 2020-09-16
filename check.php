<?php
echo "checking data<br>";
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
else echo "connection  succeed<br>";

$name=$_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//echo $email." ".$password;

$sql = "select * from data";
$result = mysqli_query($per, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    //echo "email: " . $row["email"]. " - pass: " . $row["password"]."<br>";
      if($email === $row["email"] && $password === $row["password"]){
            $count++;
      }
      else
        $count2++;
      //echo $count."<br>".$count2."<br>";
  }

          if($count!=0){
            echo "match found<br>";
            header("refresh:0.0001 ; url=home.php");
          }
          else{
            echo "<script type="text/javascript"> window.alert("Please, Check the Email and Password");</script>";
            header("refresh:0.001 ; url=index.html");
          }
}
else {
  echo "0 results";
}



?>
</body></html>
