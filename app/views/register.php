<div class="flex-row">
    <div class="col">
        <form action="/register" method="POST" class="col">
            <h1>Bienvenue chez Isanté</h1>
            <br>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Jones" required>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="John" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@example.com" required>

            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" required>

            <p style="font-size: 0.75rem; color: lightgray">
                ⚈ Au moins 10 caractère &emsp; &emsp; ⚈ Un caractère majuscule &emsp; &emsp; ⚈ Un caractère minuscule
                <br><br>⚈ Un caractère spécial &emsp;&emsp;&emsp;&emsp;⚈ Un chiffre
            </p>
            <br>
            <p>
                En créant un compte, vous acceptez les <a href="/cgu" id="CGU">Conditions générales d'utilisation.</a>
            </p>
            <br>
            <button type="submit">Créer mon compte</button>
            <br>
            <p>
                Vous avez déjà un compte ? <a href="/login">Se connecter à mon compte</a>
            </p>
        </form>
    </div>
    <div class="col p-0">
        <img src="<?= BASE_URL_ASSETS ?>images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>
