<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "student";
$conn = new mysqli($servername ,$username ,$pass,$dbname);
if($_SERVER['REQUEST_METHOD']=='POST'){
$a = $_POST['rollno'];
$b = $_POST['name'];
$c = $_POST['address'];
$d = $_POST['contact'];
}
if($conn){
    
}
$abc="Insert into 12civilstudent(Rollno,name,address,contact)values('$a','$b','$c','$d')";
if($conn->query($abc)){
    header('Location:student12civil.html');
}




?>
