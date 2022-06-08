<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "comics";


  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['weapon']) && !empty($_POST['studio_id'])) {

      $name = $_POST['name'];
      $weapon = $_POST['weapon'];
      $studio = $_POST['studio_id'];

      $query = "insert into charact (name, weapon, studio_id) 
      values ('$name', '$weapon', '$studio')";

      $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

      if ($run = true) {
        echo "Nice";
      }
      else {
        echo "huh";
      }
    }
    else {
      echo "vse";
    }
    mysqli_close($conn);
  }
  
?>