<div class="flex-row">
    <div class="col">
        <form method="POST">
            <h1>Bienvenue chez Isanté</h1>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@example.com"
                   value="<?= $this->escapeHtml($email); ?>"
                   required>
            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" required>

            <?php if ($error ?? false) {
                echo "<p class='error'>$error</p>";
            } ?>
            <button>Connexion</button>
            <p>Vous n'avez pas de compte ? <a href="/register" id="signup">Créez votre compte</a></p>
        </form>
    </div>
    <div class="col p-0 d-none d-md-flex">
        <img src="<?= BASE_URL_ASSETS; ?>images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>

<?php 

// connexion to the database...
// $conn = mysqli_connect("localhost","root","","colibrit");

// if($_SERVER["REQUEST_METHOD"] == "POST"){
    
//     $adminMail=$_POST['email'];
//     $adminPassword=$_POST['password'];

// }

// $sql = "SELECT * FROM admin WHERE email='admin@mail.com' AND password='nimda110' ";
// $result = $conn->query($sql);
// $row = mysqli_fetch_array($result);

// if($row['email'] == "admin@mail.com"){
//     header("location:.views/adminPanel.php");
// }else{
//     echo "Insert the right input !";
// }

?>