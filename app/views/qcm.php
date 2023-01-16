<div class="container my-3">

    <form class="flex-column">
        <div style="column-count: 2">
            <h2 class="text-blue"><u>Logement</u></h2>
            <h4 class="mb-1">Dans quel type de logement habitez-vous ?</h4>
            <input type="radio" id="appartement" name="habitat" value="1190">
            <label for="appartement">Appartement</label><br>
            <input type="radio" id="maison" name="habitat" value="1179,82">
            <label for="maison">Maison</label><br>

            <h4 class="mb-1">Combien êtes-vous chez vous ?</h4>
            <input type="radio" id="combien1" name="nbre_maison" value="196,64">
            <label for="combien1">1</label>
            <input type="radio" id="combien2" name="nbre_maison" value="393,28">
            <label for="combien2">2</label>
            <input type="radio" id="combien3" name="nbre_maison" value="589,92">
            <label for="combien3">3</label>
            <input type="radio" id="combien4" name="nbre_maison" value="786,56">
            <label for="combien4">4</label>
            <input type="radio" id="combien5" name="nbre_maison" value="983,2">
            <label for="combien5">5 ou plus</label>

            <h4 class="mb-1">Quel est le mode de chauffage de votre habitation ?</h4>
            <input type="radio" id="electricite" name="mode_chauffage" value="1684">
            <label for="electricite">Électricité</label><br>
            <input type="radio" id="gaz" name="mode_chauffage" value="1684">
            <label for="gaz">Pompe à chaleur</label><br>
            <input type="radio" id="autre" name="mode_chauffage" value="200">
            <label for="autre">Autre</label><br>

            <h4 class="mb-1">Le plus souvent vous prenez ?</h4>
            <input type="radio" id="douche" name="mode_douche" value="119">
            <label for="douche">Douche</label><br>
            <input type="radio" id="bain" name="mode_douche" value="510">
            <label for="bain">Bain</label><br>

            <h4 class="mb-1">Combien d'électroménager avez-vous ?</h4>
            <input type="radio" id="5moins" name="nbre_electromenager" value="300">
            <label for="5moins">Entre 1 et 5</label><br>
            <input type="radio" id="entre5_10" name="nbre_electromenager" value="500">
            <label for="entre5_10">Entre 5 et 10</label><br>
            <input type="radio" id="10plus" name="nbre_electromenager" value="1000">
            <label for="10plus">Plus de 10</label><br>

            <h4 class="mb-1">Comment faites-vous votre vaisselle ?</h4>
            <input type="radio" id="main" name="mode_vaisselles" value="150">
            <label for="main">A la main</label><br>
            <input type="radio" id="lave-vaisselle" name="mode_vaisselles" value="5000">
            <label for="lave-vaisselle">Avec un lave-vaisselle</label><br>

            <h2 class="text-blue"><u>Déchet</u></h2>
            <h4 class="mb-1">Faites-vous le trie ?</h4>
            <input type="radio" id="trie_oui" name="Trie" value="300">
            <label for="trie_oui">Oui</label><br>
            <input type="radio" id="trie_quelquesfois" name="Trie" value="500">
            <label for="trie_quelquesfois">Quelques fois</label><br>
            <input type="radio" id="trie_non" name="Trie" value="1000">
            <label for="trie_non">Non</label><br>

            <h4 class="mb-1">Faites-vous du compostage ?</h4>
            <input type="radio" id="compost_oui" name="compost" value="10">
            <label for="compost_oui">Oui</label><br>
            <input type="radio" id="compost_parfois" name="compost" value="150">
            <label for="compost_parfois">Parfois</label><br>
            <input type="radio" id="compost_non" name="compost" value="200">
            <label for="compost_non">Non</label><br>

            <h4 class="mb-1">Essayez-vous de réduire la quantité de matières résiduelles (en achetant des aliments
                en vrac, en refusant la publicité-rebut et les circulaires, en utilisant des contenants
                réutilisables et des produits d’entretien ménager naturels) ?</h4>
            <input type="radio" id="résidus_oui" name="résidus" value="10">
            <label for="résidus_oui">Oui</label><br>
            <input type="radio" id="résidus_parfois" name="résidus" value="150">
            <label for="résidus_parfois">Parfois</label><br>
            <input type="radio" id="résidus_non" name="résidus" value="300">
            <label for="résidus_non">Non</label><br>
        
            <h2 class="text-blue"><u> Achat</u></h2>
            <h4 class="mb-1">Achetez-vous des appareils reconditionnés</h4>
            <input type="radio" id="reconditionné_oui" name="reconditionné" value="200">
            <label for="reconditionné_oui">Oui</label><br>
            <input type="radio" id="reconditionné_parfois" name="reconditionné" value="500">
            <label for="reconditionné_parfois">Parfois</label><br>
            <input type="radio" id="reconditionné_non" name="reconditionné" value="900">
            <label for="reconditionné_non">Non</label><br>

            <h4 class="mb-1">Combien de fois achetez-vous de nouveaux vêtements par an ?</h4>
            <input type="radio" id="1_fois" name="shopping" value="200">
            <label for="1_fois">1 fois</label><br>
            <input type="radio" id="2_fois" name="shopping" value="400">
            <label for="2_fois">2 fois</label><br>
            <input type="radio" id="3_fois+" name="shopping" value="1000">
            <label for="3_fois+">3 fois ou plus</label><br>

            <h4 class="mb-1">Achetez-vous de la seconde-main ?</h4>
            <input type="radio" id="jamais" name="Seconde_main" value="500">
            <label for="jamais">Jamais</label><br>
            <input type="radio" id="1_2fois" name="Seconde_main" value="200">
            <label for="1_2fois">1 à 2 fois par an</label><br>
            <input type="radio" id="souvent" name="Seconde_main" value="100">
            <label for="souvent">Souvent</label><br>
            <input type="radio" id="toujours" name="Seconde_main" value="50">
            <label for="toujours">Toujours</label><br>

            <h2 class="text-blue"><u>Transports</u></h2>
            <h4 class="mb-1">Avez-vous une voiture ?</h4>
            <input type="radio" id="voiture_oui" name="mode_transport" value="1000">
            <label for="voiture_oui">Oui</label><br>
            <input type="radio" id="voiture_non" name="mode_transport" value="100">
            <label for="voiture_non">Non</label><br>

            <h4 class="mb-1">Combien de fois prenez-vous l'avion par an ?</h4>
            <input type="radio" id="jamais" name="Avion" value="0">
            <label for="jamais">Jamais</label><br>
            <input type="radio" id="1fois" name="Avion" value="100">
            <label for="1fois">1 fois</label><br>
            <input type="radio" id="2fois" name="Avion" value="200">
            <label for="2fois">2 fois</label><br>
            <input type="radio" id="3fois" name="Avion" value="300">
            <label for="3fois">3 fois ou plus</label><br>

            <h4 class="mb-1">Comment vous rendez-vous au travail ?</h4>
            <input type="radio" id="transports" name="Trans_travail" value="1180">
            <label for="transports">En transports en commun</label><br>
            <input type="radio" id="voiture" name="Trans_travail" value="1200">
            <label for="voiture">En voiture</label><br>
            <input type="radio" id="vélo" name="Trans_travail" value="500">
            <label for="vélo">En vélo</label><br>
            <input type="radio" id="pied" name="Trans_travail" value="1">
            <label for="pied">À pied</label><br>
            <input type="radio" id="télétravail" name="Trans_travail" value="1">
            <label for="télétravail">Fait du télétravail</label><br>

            <h2 class="text-blue"><u>Alimentation</u></h2>
            <h4 class="mb-1">Avez-vous un régime particulier ?</h4>
            <input type="radio" id="vegetarien" name="régime" value="1">
            <label for="vegetarien">Végétarien</label><br>
            <input type="radio" id="vegan" name="régime" value="1">
            <label for="vegan">Végan</label><br>
            <input type="radio" id="vegetalien" name="régime" value="5">
            <label for="vegetalien">Végétalien</label><br>
            <input type="radio" id="flexitarien" name="régime" value="150">
            <label for="flexitarien">Flexitarien</label><br>

            <h4 class="mb-1">Combien de fois faites-vous vos courses par semaine ?</h4>
            <input type="radio" id="1fois" name="Courses" value="200">
            <label for="1fois">1 fois</label><br>
            <input type="radio" id="2fois" name="Courses" value="400">
            <label for="2fois">2 fois</label><br>
            <input type="radio" id="3fois+" name="Courses" value="700">
            <label for="3fois+">3 fois ou plus</label><br>

            <h4 class="mb-1">Quel pourcentage de la nourriture que vous achetez finit à la poubelle ?(par mois)</h4>
            <input type="radio" id="zero" name="nour_poubelle" value="0">
            <label for="zero">0%</label><br>
            <input type="radio" id="entre0_30" name="nour_poubelle" value="200">
            <label for="entre0_30">Entre 0 et 30%</label><br>
            <input type="radio" id="entre30_50" name="nour_poubelle" value="300">
            <label for="entre30_50">Entre 0 et 50%</label><br>
            <input type="radio" id="plus_50" name="nour_poubelle" value="500">
            <label for="plus_50">Plus de 50%</label><br>
        </div>
        <a href="#" class="button align-self-end">Voir les résultats</a>
    </form>
</div>