<?php
require_once("connection.php");
if(isset($_GET['ssn'])){

    $ssn = $_GET['ssn'];

}else{

    $ssn = " 001 - This is our default ssn";

}
if(isset($_GET['name'])){

    $name = $_GET['name'];

}else{

    $name = " John - This is our default name";

}
if(isset($_GET['age'])){

    $age = $_GET['age'];

}else{

    $age = " 20 - This is our default age";

}
if(isset($_GET['email'])){

    $email = $_GET['email'];

}else{

    $email = " Johnmutansa@proton.me - This is our default email";

}
if(isset($_GET['password'])){

    $password = $_GET['password'];

}else{

    $password = " John - This is our default password";

}

/*$ssn = $_POST["ssn"];
$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];
$password = $_POST["Password"];*/



$host = "localhost";
$dbname = "drugdispensings";
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

mysqli_stmt_bind_param($stmt, "isiss",
                       $ssn,
                       $name,
                       $age,
                       $email,
                       $password);

                      /* $stmt -> bind_param("isiss", $ssn, $name, $age, $email, $password);
                       $ssn = 1;
                       $name = 'Shikhar';
                       $age = 20;
                       $email = 'Delhi';
                       $password = 'India';
                       $stmt->execute();
                       //Closing the statement
                       $stmt->close();
                       //Closing the connection
                       $conn->close();*/
mysqli_stmt_execute($stmt);

echo "Record saved.";