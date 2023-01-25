<div class="grid-container">

    <?= $sideBar ?? null; ?>

    <!--début du milieu de page-->
    <main class="main-container">
        <div class="cards">

            <form method="POST" class="formulaire">
                <h1>Modifier votre profil</h1>
                <br>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Jones">
                </br>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" placeholder="John">
                <br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="example@email.fr">
                <br>
                <button>Modifier</button>


        </div>

        <br>

        <div class="cards">
            <form method="POST" class="formulaire">
                <h1>Modifier votre mot de passe</h1>
                <label for="pwd">Mot de passe</label>
                <input type="password" name="password" id="pwd" placeholder="Nouveau mot de passe">
                <br>
                <button>Modifier</button>
        </div>

    </main>
</div>