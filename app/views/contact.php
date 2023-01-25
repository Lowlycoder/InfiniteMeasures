<div class="container">
    <div class="flex-row">
        <div class="col">
            <h2>Nous contacter</h2>

            <form action="/contact" method="POST">
                <label for="name">Nom et Prénom</label>
                <input type="text" name="name" id="name" required value="<?= $this->escapeHtml($name); ?>">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="<?= $this->escapeHtml($email); ?>">
                <label for="subject">Sujet</label>
                <input type="text" name="subject" id="subject" required value="<?= $this->escapeHtml($subject); ?>">
                <label for="message">Message</label>
                <textarea name="message" id="message"
                          cols="52" rows="10" required><?= $this->escapeHtml($message); ?></textarea>
                <?php if ($error ?? false) {
                    echo "<p class='error'>$error</p>";
                } ?>
                <button class="my-3">Envoyer</button>
            </form>
        </div>

        <div class="col d-none d-md-flex align-items-center">
            <img src="<?= BASE_URL_ASSETS; ?>images/logo_Isanté.png" alt="logo" width="100%">
        </div>
    </div>
</div>

