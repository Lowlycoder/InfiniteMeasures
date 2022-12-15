<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/bb762585be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 
    <title>Isanté</title>
</head>
<body> -->
    <!-- Entête de la page  -->
    <header>
        <div class="logo_Isanté">
            <a href="#"><img src="<?= BASE_URL_ASSETS ?>images/Isanté_logo.png" alt="logo" width="200px" height="80px" ></a>
        </div>
        <div id="bare_menu">
            <nav>
                <ul>
                    <li><a href="#">Fun Fact</a></li>
                    <li><a href="#">FAQ </a></li>
                    <li><a href="#">Mesurer mon empreinte carbone</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="search_container" style="padding:21px 20px;">
            <form action="#" method="get" id="search_bar" style="background-color:rgb(243, 243, 243);border-radius:2rem;width:200px;padding:0px;">
                <button type="submit" style="border-radius:50%;border:0;cursor:pointer;"><img src="https://cdn4.iconfinder.com/data/icons/popular-ui/24/04_ui_user_interface_search_magnifying_glass_web_ios-512.png" alt="loop" width="18px" height="15px"></button>
                <input type="text" placeholder="search..." style="background: transparent;flex:1;border:0;outline: none;padding-left:7px;">
            </form>

        </div>
        <div class="switch_language">
            <a href="#"><img src="<?= BASE_URL_ASSETS ?>images/French_flag.png" alt="flag" width="30px" height="30px"></a>
        </div>
        <div class="connect" style="padding-left:150px;padding-top:13px;">
            <div class="login" style="margin-right:10px;">
                <a href="#" style="color: black;"><p>Log in</p></a>
            </div>

            <div class="signup">
                <a href="#" style="color: white;"><p>Sign up</p></a>
            </div>

        </div>
        
    </header>    
    <img src="<?= BASE_URL_ASSETS ?>images/home_picture.jpg" alt="home_picture" width="100%" height="100%">
<!-- </body>
</html> -->