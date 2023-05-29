<?php
if (isset($_POST['Register'])) {
$ssn = $_POST["ssn"];
$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];
$password = $_POST["password"];
}


$host = "localhost";
$dbname = "drugdispensing";
$username = "root";
$password = "1Rurilongstaff1";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO patient (ssn, name, age, email, password)
        VALUES (?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);


if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

/*mysqli_stmt_bind_param($stmt, "isiss",
                       $ssn,
                       $name,
                       $age,
                       $email,
                       $password);*/

                       $stmt -> bind_param("isiss", $ssn, $name, $age, $email, $password);
                       $ssn = 1;
                       $name = 'Shikhar';
                       $age = 20;
                       $email = 'Delhi';
                       $password = 'India';
                       $stmt->execute();
                       //Closing the statement
                       $stmt->close();
                       //Closing the connection
                       $conn->close();
//mysqli_stmt_execute($stmt);

echo "Record saved.";