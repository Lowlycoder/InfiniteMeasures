<?php

//Connection to the colibrit database
$conn= mysqli_connect('localhost','root','','colibrit','3306');

//Formular variables
$firstName="";
$lastName="";
$passwordHash="";
$mail= "";


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $qry= "SELECT * FROM user WHERE idUser = $id";
    $rlt = $conn->query($qry);
    $row = mysqli_fetch_assoc($rlt);
    $firstName= $row["prenom"];
    $lastName= $row["nom"];
    $passwordHash= $row["passwordHash"];
    $mail= $row["email"];
}


if (isset($_POST['submit'])){

    $id = $_GET['id'];
    $FirstName= $_POST["prenom"];
    $LastName= $_POST["nom"];
    $password= $_POST["passwordHash"];
    $email= $_POST["email"];

    $sql= "UPDATE user SET nom=$LastName, prenom=$FirstName, email=$email, passwordHash=$password WHERE idUser = $id ";

    $result=$conn->query($sql);
    if ($result){
        // echo "You have been successfully updated !";
        header("location:./userList.php");
    }else{
        echo "Invalid query : ".$conn->error;
    }
}

?>

<div class="container">
    <div class="connect">
        
        <form action="EditUser.php" method="POST">
            <h1 class="titre">Bienvenue chez Isanté</h1>
            <br>
            <label for="name">Nom</label>
            <input type="text" name="lastName" id="lastName" placeholder="John " style="font-size: 1rem"  value="<?php echo $lastName ;?>">

            <label for="name">Prénom</label>
            <input type="text" name="firstName" id="firstname" placeholder="Jones" style="font-size: 1rem" value="<?php echo $firstName ;?>">

            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="example@example.com" style="font-size: 1rem" value="<?php echo $mail ;?>">

            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" style="font-size: 1rem"  value="<?php echo $passwordHash ;?>">

            <p class ="caractéristiques" style="font-size: 0.80rem">
                ⚈ Au moins 10 caractère &emsp; &emsp; ⚈ Un caractère majuscule &emsp; &emsp; ⚈ Un caractère minuscule <br><br> ⚈ Un caractère spécial &emsp;&emsp;&emsp;&emsp;⚈ Un chiffre
            </p>
            <br>
            <p>
                En créant un compte, vous acceptez les <a href="/cgu" id="CGU">Conditions générales d'utilisation.</a>
            </p>
            <br>
            <input type="submit" id='submit' value='Update' style="font-size: 1rem">
            <br>
                <p>
                    Vous avez déjà un compte ? <a href="/login">Se connecter à mon compte</a>
                </p>
        </form>
    </div>
    <div class="image">
        <img src="images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>

