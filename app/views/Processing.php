<?php 

// Variables

$FirstName= $_POST["firstName"];
$LastName= $_POST["lastName"];
$email= $_POST["email"];
$password= $_POST["password"];

// Connexion to the database

$conn= mysqli_connect('localhost','root','root','colibrit','3306');
if($conn->connect_error){
    die('Error connecting to database : '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("INSERT INTO user (nom,prenom,email,passwordHash) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss",$LastName,$FirstName,$email,$password);
    if($stmt->execute()==true){
        echo "Your data have been successfully saved !";
    }else{
        echo $conn->error;
    }
    $stmt->close();
    $conn->close();

}




?>