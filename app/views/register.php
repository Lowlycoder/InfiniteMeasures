<div class="flex-row">
    <div class="col">
        <form action="/register" method="POST">
            <h1>Bienvenue chez Isanté</h1>
            <br>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Jones" required value="<?= $this->escapeHtml($nom); ?>">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="John" required
                   value="<?= $this->escapeHtml($prenom); ?>">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@example.com" required
                   value="<?= $this->escapeHtml($email); ?>">

            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" required>

            <div class="d-grid"
                 style="font-size: 0.75rem; color: gray; text-align: center; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr))">
                <div class="text-nowrap" id="length">⏺ Au moins 10 caractère</div>
                <div class="text-nowrap" id="uppercase">⏺ Un caractère majuscule</div>
                <div class="text-nowrap" id="specialChar">⏺ Un caractère spécial</div>
                <div class="text-nowrap" id="lowercase">⏺ Un caractère minuscule</div>
                <div class="text-nowrap" id="number">⏺ Un chiffre</div>
            </div>
            <br>
            <p>
                En créant un compte, vous acceptez les <a href="/cgu" id="CGU">Conditions générales d'utilisation.</a>
            </p>
            <br>
            <?php if ($error ?? false) :
                echo "<p class='error'>$error</p>";
            endif; ?>
            <button>Créer mon compte</button>
            <br>
            <p>
                Vous avez déjà un compte ? <a href="/login">Se connecter à mon compte</a>
            </p>
        </form>
    </div>
    <div class="col p-0 d-none d-md-flex">
        <img src="<?= BASE_URL_ASSETS; ?>images/img.webp" alt="image" style="height:100%;width:100%">
    </div>
</div>