<?php

//Connexion to the colibrit database
$conn = mysqli_connect('localhost', 'root', '', 'colibrit', '3306');

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE idUser = $id";
    $result = $conn->query($sql);

    if ($result) {
        header("location: /users");
    } else {
        echo "Error of query :".$conn->error;
    }
}

?>