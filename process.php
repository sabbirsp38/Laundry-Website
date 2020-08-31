<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "usertest";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection    
  if ($conn->connect_error) 
  {
      die("Connection went wrong: " . $conn->connect_error); 
  } 
     
    $from_data1 = $conn->real_escape_string ($_POST['uname']);
    $from_data2 = $conn->real_escape_string ($_POST['pnum']);
    $from_data3 = $conn->real_escape_string ($_POST['uemail']);
    $from_data4 = $conn->real_escape_string ($_POST['uloc']);
    $from_data5 = $conn->real_escape_string ($_POST['msg']);




  $sql = "INSERT INTO user ( name, num, email, uadd, msg) VALUES ('$from_data1', '$from_data2', '$from_data3', '$from_data4','$from_data5')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: index.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>