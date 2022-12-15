
<div class="container">
    <div class="connect">
        <form action="verification.php" method="POST">

            <h1 class="titre">Bienvenue chez ISanté</h1>
            <br>
            <label>Email</label>
            <input type="text" placeholder="example@example.com" style="font-size: 1rem" name="username" required>

            <label>Mot de passe</label>
            <input type="password" name="pwd" id="pwd" placeholder="entrez votre mot de passe" style="font-size: 1rem" name="password" required>

            <input type="submit" id='submit' value='Créer mon compte' style="font-size: 1rem">
            <input type="submit" id='submit' value='Connexion' style="font-size: 1rem">
             <p>
                Vous n'avez pas de compte ? <a href="/register" id="signup">Créez votre compte</a>
             </p>
        </form>
    </div>
    <div class="image">
        <img src="<?= BASE_URL_ASSETS ?>images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>
