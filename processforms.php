<?php
require_once("connection.php");
/*$ssn = $_POST["ssn"];
$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];
$password = $_POST["password"];*/
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

$sql = "INSERT INTO patient (SSN, name, age, email, password)
        VALUES ('$ssn', '$name', '$age', '$email', '$password')";


$conn->query($sql);
echo "Record saved.";

?>


