<div class="flex-row">
    <div class="col">
        <form action="/login" method="POST">

            <h1>Bienvenue chez Isanté</h1>
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@example.com" required>
            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" required>

            <a type="submit" class="button">Connexion</a>
            <p>Vous n'avez pas de compte ? <a href="/register" id="signup">Créez votre compte</a></p>
        </form>
    </div>
    <div class="col p-0">
        <img src="<?= BASE_URL_ASSETS ?>images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>