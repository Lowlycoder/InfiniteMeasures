<?php 

// connexion to the database...
$conn = mysqli_connect("localhost","root","","colibrit");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $adminMail=$_POST['mail'];
    $adminPassword=$_POST['passwordHash'];

}



?>