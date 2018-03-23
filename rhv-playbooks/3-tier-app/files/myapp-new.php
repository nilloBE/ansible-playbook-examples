<?php
  $servername = "10.50.50.200";
  $username = "app-user";
  $password = "cisco";
  $db_name = "test";
  $db_port = "3306";

  $file = 'giphy.gif';
  header('Content-type: image/gif');
  readfile($file);

  // create connection to the DB
  $conn = mysqli_connect($servername, $username, $password, $db_name);

  // check that connection worked
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected succesfully to the DB<br>";

  $string = '<br>This is an awesome App!<br>';

  // Print text
  echo $string;

  // print hostname
  echo "<br>Running from  ";
  echo gethostname();
?>
