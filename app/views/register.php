<div class="container">
    <div class="connect">
        <form action="/register" method="POST">
            <h1 class="titre">Bienvenue chez Isanté</h1>
            <br>
            <label for="name">Nom</label>
            <input type="text" name="lastName" id="lastName" placeholder="Jones" style="font-size: 1rem" required>

            <label for="name">Prénom</label>
            <input type="text" name="firstName" id="firstName" placeholder="John " style="font-size: 1rem" required>

            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="example@example.com" style="font-size: 1rem" required>

            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" style="font-size: 1rem" required>

            <p class ="caractéristiques" style="font-size: 0.80rem">
                ⚈ Au moins 10 caractère &emsp; &emsp; ⚈ Un caractère majuscule &emsp; &emsp; ⚈ Un caractère minuscule <br><br> ⚈ Un caractère spécial &emsp;&emsp;&emsp;&emsp;⚈ Un chiffre
            </p>
            <br>
            <p>
                En créant un compte, vous acceptez les <a href="/cgu" id="CGU">Conditions générales d'utilisation.</a>
            </p>
            <br>
            <input type="submit" id='submit' value='Créer mon compte' style="font-size: 1rem">
            <br>
                <p>
                    Vous avez déjà un compte ? <a href="/login">Se connecter à mon compte</a>
                </p>
        </form>
    </div>
    <div class="image">
        <img src="<?= BASE_URL_ASSETS ?>images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>
