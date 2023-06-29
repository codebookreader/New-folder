<?php
$servername = "localhost";
$username = "root";
$password = "1Rurilongstaff1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  $stmt = $con->prepare("select * from drugdispensings where email = ?");
  $stmt->bind_param("s", email);
  $stmt->execute();
  $stmt_result - $stmt->get_result();
  if($stmt_result->num_rows = 0){
    $data = $stmt_result->fetch_assoc();
    if($data['password'] === $password){
      echo "<h2>Login Successful</h2>"
    }
  }
}
/*$sql = "SELECT * from patient";
$result = $conn ->query($sql);
print_r($result);*/
?>

