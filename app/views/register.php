<div class="container">
    <div class="connect">
        <form action="/register" method="POST">
            <h1 class="titre">Bienvenue chez ISanté</h1>
            <br>
            <label>Nom et Prénom</label>
            <input type="text" placeholder="John Jones" style="font-size: 1rem" name="name" required>

            <label>Email</label>
            <input type="text" placeholder="example@example.com" style="font-size: 1rem" name="username" required>

            <label>Mot de passe</label>
            <input type="password" name="pwd" id="pwd" placeholder="entrez votre mot de passe" style="font-size: 1rem" name="password" required>

            <p class ="caractéristiques" style="font-size: 0.80rem">
                ⚈ Au moins 10 caractère &emsp; &emsp; ⚈ Un caractère majuscule &emsp; &emsp; ⚈ Un caractère minuscule <br><br> ⚈ Un caractère spécial &emsp; &emsp; &emsp; &emsp; ⚈ Un chiffre
            </p>
            <br>
            <p>
                    En créant un compte, vous acceptez les <a href="#" id="CGU">Conditions générales d'utilisation.</a>
            </p>
            <br>
            <input type="submit" id='submit' value='Créer mon compte' style="font-size: 1rem">
            <br>
                <p>
                    Vous avez déjà un compte ? <a href="#" id="signup"><a href="PDG.html">Se connecter à mon compte</a></a>
                </p>
        </form>
    </div>
    <div class="image">
        <img src="<?= BASE_URL_ASSETS ?>images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>
