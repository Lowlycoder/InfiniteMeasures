<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>contact_page</title>
</head>
<body>
    <h2>NOUS CONTACTER</h2>

    <div class="container_contact">

        <div class="contact_form">

            <form action="contact.php" method="POST">
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
            <img src="Infinite_measures.gif" alt="logo" width="70%" height="70%">
        </div>

    </div>
    
    <?php

    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message="<strong>From :</strong>".$email."\n".$_POST["message"]."\n\n\n"."Cordialement ".$_POST["name"].'.';

    $to="kenneth.bongahermann@gsrstudent.ma";
    $headers=array(
        'From: '=>  $email,
        'Reply-To' => $email,
        'content-type' => 'text/html'
    );
   
    $sentMail=mail($to,$subject,$message,$headers);
    if(!empty($_POST["message"]) ){
        if($sentMail){
            echo "Your email has been sent successfully !";
        }else{
            echo "Error !!!";
        }
    }
    ?>



   
</body>
</html>

