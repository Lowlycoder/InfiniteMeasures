<div class="container">
    <div class="connect">
        <form action="/login" method="POST">

            <h1 class="titre">Bienvenue chez Isanté</h1>
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="example@example.com" style="font-size: 1rem" required>

            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" style="font-size: 1rem" required>

            <input type="submit" id="submit" value='Connexion' style="font-size: 1rem">
             <p>
                Vous n'avez pas de compte ? <a href="/register" id="signup">Créez votre compte</a>
             </p>
        </form>
    </div>
    <div class="image">
        <img src="<?= BASE_URL_ASSETS ?>images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>
