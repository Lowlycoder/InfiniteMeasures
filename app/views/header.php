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
        <div id="bare_menu"> <!-- La bare de navigation -->
            <nav>
                <ul>
                    <li><a href="#" style="text-decoration: none;">Fun Fact</a></li>
                    <li><a href="#" style="text-decoration: none;">FAQ </a></li>
                    <li><a href="#" style="text-decoration: none;">Mesurer mon empreinte carbone</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="search_container" > <!-- La bare de recherche -->
            <form action="#" method="get" id="search_bar">
                <button type="submit" id="search-button"><img src="https://cdn4.iconfinder.com/data/icons/popular-ui/24/04_ui_user_interface_search_magnifying_glass_web_ios-512.png" alt="loop" width="18px" height="15px"></button>
                <input type="text" placeholder="search..." style="background: transparent;flex:1;border:0;outline: none;padding-left:7px;">
            </form>

        </div>
        <div class="switch_language"> <!-- C'est ici que l'on change la langue de notre site -->
            <a href="#"><img src="<?= BASE_URL_ASSETS ?>images/French_flag.png" alt="flag" width="30px" height="30px"></a>
        </div>
        <div id="connection" style="margin:auto 20px auto auto;"> <!-- C'est ici que l'on se connecte dans notre site -->
            <div id="login" style="margin-right:10px;">
                <a href="/login" style="color: black;text-decoration: none;text-align: center;">Log in</a>
            </div>

            <div id="signup">
                <a href="/register" style="color: white;text-decoration: none;text-align: center;">Sign up</a>
            </div>

        </div>
        
    </header>    
<!-- </body>
</html> -->