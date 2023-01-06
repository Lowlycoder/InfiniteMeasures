<div class="container my-3">
    <form class="flex-column">
        <div style="column-count: 2">
            <h2>Logement</h2>
            <h4 class="mb-1">Dans quel type de logement habitez-vous ?</h4>
            <input type="radio" id="appartement" name="habitat" value="Appartement">
            <label for="appartement">Appartement</label><br>
            <input type="radio" id="maison" name="habitat" value="Maison">
            <label for="maison">Maison</label><br>

            <h4 class="mb-1">Combien êtes-vous ?</h4>
            <input type="radio" id="combien1" name="nbre_maison" value="1">
            <label for="combien1">1</label>
            <input type="radio" id="combien2" name="nbre_maison" value="2">
            <label for="combien2">2</label>
            <input type="radio" id="combien3" name="nbre_maison" value="3">
            <label for="combien3">3</label>
            <input type="radio" id="combien4" name="nbre_maison" value="4">
            <label for="combien4">4</label>
            <input type="radio" id="combien5" name="nbre_maison" value="5+">
            <label for="combien5">5 ou plus</label>

            <h4 class="mb-1">Quel est le mode de chauffage de votre habitation ?</h4>
            <input type="radio" id="electricite" name="mode_chauffage" value="Électricité">
            <label for="electricite">Électricité</label><br>
            <input type="radio" id="gaz" name="mode_chauffage" value="Gaz">
            <label for="gaz">Gaz</label><br>
            <input type="radio" id="autre" name="mode_chauffage" value="Autre">
            <label for="autre">Autre</label><br>

            <h4 class="mb-1">Le plus souvent vous prenez ?</h4>
            <input type="radio" id="douche" name="mode_douche" value="Douche">
            <label for="douche">Douche</label><br>
            <input type="radio" id="bain" name="mode_douche" value="Bain">
            <label for="bain">Bain</label><br>

            <h4 class="mb-1">Combien d'électroménager avez-vous ?</h4>
            <input type="radio" id="5moins" name="nbre_electromenager" value="5-">
            <label for="5moins">Entre 1 et 5</label><br>
            <input type="radio" id="entre5_10" name="nbre_electromenager" value="5_10">
            <label for="entre5_10">Entre 5 et 10</label><br>
            <input type="radio" id="10plus" name="nbre_electromenager" value="5-">
            <label for="10plus">Plus de 10</label><br>

            <h4 class="mb-1">Comment faites-vous votre vaisselle ?</h4>
            <input type="radio" id="main" name="mode_vaisselles" value="Main">
            <label for="main">A la main</label><br>
            <input type="radio" id="lave-vaisselle" name="mode_douche" value="Lave-vaisselle">
            <label for="lave-vaisselle">Avec un lave-vaisselle</label><br>

            <h2>Déchet</h2>
            <h4 class="mb-1">Faites-vous le trie ?</h4>
            <input type="radio" id="trie_oui" name="Trie" value="Trie_oui">
            <label for="trie_oui">Oui</label><br>
            <input type="radio" id="trie_quelquesfois" name="Trie" value="Trie_quelquesfois">
            <label for="trie_quelquesfois">Quelques fois</label><br>
            <input type="radio" id="trie_non" name="Trie" value="Trie_non">
            <label for="trie_non">Non</label><br>

            <h4 class="mb-1">Faites-vous du compostage ?</h4>
            <input type="radio" id="compost_oui" name="compost" value="Compost_oui">
            <label for="compost_oui">Oui</label><br>
            <input type="radio" id="compost_parfois" name="compost" value="Compost_parfois">
            <label for="compost_parfois">Parfois</label><br>
            <input type="radio" id="compost_non" name="compost" value="compost_non">
            <label for="compost_non">Non</label><br>

            <h4 class="mb-1">Essayez-vous de réduire la quantité de matières résiduelles (en achetant des aliments
                en vrac, en refusant la publicité-rebut et les circulaires, en utilisant des contenants
                réutilisables et des produits d’entretien ménager naturels) ?</h4>
            <input type="radio" id="résidus_oui" name="résidus" value="Résidus_oui">
            <label for="résidus_oui">Oui</label><br>
            <input type="radio" id="résidus_parfois" name="résidus" value="Résidus_parfois">
            <label for="résidus_parfois">Parfois</label><br>
            <input type="radio" id="résidus_non" name="résidus" value="Résidus_non">
            <label for="résidus_non">Non</label><br>
        </div>
        <a href="#" class="button align-self-end">Suivant</a>
        <hr>
        <div style="column-count: 2">
            <h2> Achat</h2>
            <h4 class="mb-1">Achetez-vous des appareils reconditionnés</h4>
            <input type="radio" id="reconditionné_oui" name="reconditionné" value="Reconditionné_oui">
            <label for="reconditionné_oui">Oui</label><br>
            <input type="radio" id="reconditionné_parfois" name="reconditionné" value="Reconditionné_parfois">
            <label for="reconditionné_parfois">Parfois</label><br>
            <input type="radio" id="reconditionné_non" name="reconditionné" value="Reconditionné_non">
            <label for="reconditionné_non">Non</label><br>

            <h4 class="mb-1">Combien de fois achetez-vous de nouveaux vêtements par an ?</h4>
            <input type="radio" id="1_fois" name="shopping" value="1fois">
            <label for="1_fois">1 fois</label><br>
            <input type="radio" id="2_fois" name="shopping" value="2fois">
            <label for="2_fois">2 fois</label><br>
            <input type="radio" id="3_fois+" name="shopping" value="3fois">
            <label for="3_fois+">3 fois ou plus</label><br>

            <h4 class="mb-1">Achetez-vous de la seconde-main ?</h4>
            <input type="radio" id="jamais" name="Seconde_main" value="Jamais">
            <label for="jamais">Jamais</label><br>
            <input type="radio" id="1_2fois" name="Seconde_main" value="1_2fois">
            <label for="1_2fois">1 à 2 fois par an</label><br>
            <input type="radio" id="souvent" name="Seconde_main" value="Souvent">
            <label for="souvent">Souvent</label><br>
            <input type="radio" id="toujours" name="Seconde_main" value="Toujours">
            <label for="toujours">Toujours</label><br>

            <h2>Transports</h2>
            <h4 class="mb-1">Avez-vous une voiture ?</h4>
            <input type="radio" id="voiture" name="mode_transport" value="oui">
            <label for="voiture">Oui</label><br>
            <input type="radio" id="voiture_non" name="mode_transport" value="non">
            <label for="voiture_non">Non</label><br>

            <h4 class="mb-1">Combien de fois prenez-vous l'avion par an ?</h4>
            <input type="radio" id="jamais" name="Avion" value="Jamais">
            <label for="jamais">Jamais</label><br>
            <input type="radio" id="1fois" name="Avion" value="1Fois">
            <label for="1fois">1 fois</label><br>
            <input type="radio" id="2fois" name="Avion" value="2Fois">
            <label for="2fois">2 fois</label><br>
            <input type="radio" id="3fois" name="Avion" value="3Fois+">
            <label for="3fois">3 fois ou plus</label><br>

            <h4 class="mb-1">Comment vous rendez-vous au travail ?</h4>
            <input type="radio" id="transports" name="Trans_travail" value="Transports">
            <label for="transports">En transports en commun</label><br>
            <input type="radio" id="voiture" name="Trans_travail" value="Voiture">
            <label for="voiture">En voiture</label><br>
            <input type="radio" id="vélo" name="Trans_travail" value="Vélo">
            <label for="vélo">En vélo</label><br>
            <input type="radio" id="pied" name="Trans_travail" value="Pied">
            <label for="pied">À pied</label><br>
            <input type="radio" id="télétravail" name="Trans_travail" value="Télétravail">
            <label for="télétravail">Fait du télétravail</label><br>

            <h2>Alimentation</h2>
            <h4 class="mb-1">Avez-vous un régime particulier ?</h4>
            <input type="radio" id="vegetarien" name="régime" value="végétarien">
            <label for="vegetarien">Végétarien</label><br>
            <input type="radio" id="vegan" name="régime" value="végan">
            <label for="vegan">Végan</label><br>
            <input type="radio" id="vegetalien" name="régime" value="végétalien">
            <label for="vegetalien">Végétalien</label><br>
            <input type="radio" id="flexitarien" name="régime" value="flexitarien">
            <label for="flexitarien">Flexitarien</label><br>

            <h4 class="mb-1">Combien de fois faites-vous vos courses par semaines ?</h4>
            <input type="radio" id="1fois" name="Courses" value="1Fois">
            <label for="1fois">1 fois</label><br>
            <input type="radio" id="2fois" name="Courses" value="2Fois">
            <label for="2fois">2 fois</label><br>
            <input type="radio" id="3fois+" name="Courses" value="3Fois+">
            <label for="3fois+">3 fois ou plus</label><br>

            <h4 class="mb-1">Quel pourcentage de la nourriture que vous achetez finit à la poubelle ?</h4>
            <input type="radio" id="zero" name="nour_poubelle" value="0%">
            <label for="zero">0%</label><br>
            <input type="radio" id="entre0_30" name="nour_poubelle" value="Entre0_30%">
            <label for="entre0_30">Entre 0 et 30%</label><br>
            <input type="radio" id="entre30_50" name="nour_poubelle" value="Entre30_50%">
            <label for="entre30_50">Entre 0 et 50%</label><br>
            <input type="radio" id="plus_50" name="nour_poubelle" value="Plus_50%">
            <label for="plus_50">Plus de 50%</label><br>
        </div>
        <a href="#" class="button align-self-start">Retour</a>
        <a href="#" class="button align-self-end">Voir les résultats</a>
    </form>
</div>