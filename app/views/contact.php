<div class="container">
    <div class="col">
        <h2>Nous contacter</h2>

        <form action="/contact" method="POST">
            <label for="name">Nom et Prénom</label>
            <input type="text" name="name" id="name" class="input-field">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="input-field">
            <label for="subject">Sujet</label>
            <input type="text" name="subject" id="subject" class="input-field">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="52" rows="10"></textarea>
            <button type="submit" class="mt-4" id="submit_button">SOUMETTRE</button>
        </form>
    </div>

    <div class="col">
        <img src="<?= BASE_URL_ASSETS ?>images/logo_Isanté.png" alt="logo" width="100%">
    </div>
</div>

