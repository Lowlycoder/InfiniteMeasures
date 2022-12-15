<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css">
    <title>contact_page</title>
</head>
<body>
    <h2>NOUS CONTACTER</h2>

    <div class="container_contact">

        <div class="contact_form">

            <form action="/contact" method="POST">
                <label for="name" >Nom et Prénom</label><br>
                <input type="text" name="name" id="name" class="input-field"><br>
                <label for="adresse_mail">Email</label><br>
                <input type="email" name="email" id="email" class="input-field"><br>
                <label for="subject" >Sujet</label><br>
                <input type="text" name="subject" id="subject" class="input-field"><br>
                <label for="message">Message</label><br>
                <textarea name="message" id="message" cols="52" rows="10" style="border-radius: 12px;"></textarea><br>
                <button type="submit"  style="margin-top:10px;" id="submit_button">SOUMETTRE</button>
            </form>

        </div>

        <div class="logo">
            <img src="<?= BASE_URL_ASSETS ?>images/logo_Isanté.png" alt="logo" >
        </div>

    </div>
    




   
</body>
</html>

