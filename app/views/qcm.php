<div class="newspaper">
            <h3>Logement</h3>
            <p>Où habitez-vous?</p>
            <form>
                <input type="radio" id="appartement" name="habitat" value="Appartement">
                <label for="html">Appartement</label><br>
                <input type="radio" id="maison" name="habitat" value="Maison">
                <label for="css">Maison</label><br>
                </form> 
            <p>Combien êtes-vous?</p>
            <form>
                <input type="radio" id="combien1" name="nbre_maison" value="1">
                <label for="combien1">1</label>
                <input type="radio" id="combien2" name="nbre_maison" value="2">
                <label for="combien2">2</label>
                <input type="radio" id="combien3" name="nbre_maison" value="3">
                <label for="combien3">3</label>
                <input type="radio" id="combien4" name="nbre_maison" value="4">
                <label for="combien4">4</label>
                <input type="radio" id="combien4" name="nbre_maison" value="5+">
                <label for="combien5">5 ou plus</label>
            </form> 
            <p>Quel est le mode de chauffage de votre habitation?</p>
            <form>
                <input type="radio" id="electricite" name="mode_chauffage" value="Electricité">
                <label for="electricite">Electricité</label><br>
                <input type="radio" id="gaz" name="mode_chauffage" value="Gaz">
                <label for="gaz">Gaz</label><br>
                <input type="radio" id="autre" name="mode_chauffage" value="Autre">
                <label for="autre">Autre</label><br>
            </form> 
            <p>Le plus souvent vous prenez?</p>
            <form>
                <input type="radio" id="douche" name="mode_douche" value="Douche">
                <label for="douche">Douche</label><br>
                <input type="radio" id="bain" name="mode_douche" value="Bain">
                <label for="bain">Bain</label><br>
            </form>
            <p>Combien d'électroménager avez-vous?</p>
            <form>
                <input type="radio" id="5moins" name="nbre_electromenager" value="5-">
                <label for="5moins">Entre 1 et 5</label><br>
                <input type="radio" id="entre5_10" name="nbre_electromenager" value="5_10">
                <label for="entre5_10">Entre 5 et 10</label><br>
                <input type="radio" id="10plus" name="nbre_electromenager" value="5-">
                <label for="10plus">Plus de 10</label><br>
            </form>
            <p>Comment faites-vous votre vaisselles?</p>
            <form>
                <input type="radio" id="main" name="mode_vaisselles" value="Main">
                <label for="main">A la main</label><br>
                <input type="radio" id="lave-vaisselle" name="mode_douche" value="Lave-vaisselle">
                <label for="lave-vaisselle">Avec un lave-vaiselle</label><br>
            </form>
            <h3>Déchet</h3>
            <p>Faites-vous le trie?</p>
            <form>
                <input type="radio" id="trie_oui" name="Trie" value="Trie_oui">
                <label for="trie_oui">Oui</label><br>
                <input type="radio" id="trie_quelquesfois" name="Trie" value="Trie_quelquesfois">
                <label for="trie_quelquesfois">Quelques fois</label><br>
                <input type="radio" id="trie_non" name="Trie" value="Trie_non">
                <label for="trie_non">Non</label><br>
            </form>
            <p>Faites-vous du compostage?</p>
            <form>
                <input type="radio" id="compost_oui" name="compost" value="Compost_oui">
                <label for="compost_oui">Oui</label><br>
                <input type="radio" id="compost_parfois" name="compost" value="Compost_parfois">
                <label for="compost_parfois">Parfois</label><br>
                <input type="radio" id="compost_non" name="compost" value="compost_non">
                <label for="compost_non">Non</label><br>
            </form>
            <p>Essayez-vous de réduire la quantité de matières résiduelles (en achetant des aliments 
                en vrac, en refusant la publicité-rebut et les circulaires, en utilisant des contenants
                réutilisables et des produits d’entretien ménager naturels) ?</p>
            <form>
                <input type="radio" id="résidus_oui" name="résidus" value="Résidus_oui">
                <label for="résidus_oui">Oui</label><br>
                <input type="radio" id="résidus_parfois" name="résidus" value="Résidus_parfois">
                <label for="résidus_parfois">Parfois</label><br>
                <input type="radio" id="résidus_non" name="résidus" value="Résidus_non">
                <label for="résidus_non">Non</label><br>
            </form>
            <a href="QCM(suite).html"><input type="button" class="button" value="Suivant"></a>
        </div>
        <div class="newspaper">
            <h3> Achat</h3>
            <p>Achetez-vous des appareils reconditionnés</p>
            <form>
            <input type="radio" id="reconditionné_oui" name="reconditionné" value="Reconditionné_oui">
            <label for="reconditionné_oui">Oui</label><br>
            <input type="radio" id="reconditionné_parfois" name="reconditionné" value="Reconditionné_parfois">
            <label for="reconditionné_parfois">Parfois</label><br>
            <input type="radio" id="reconditionnés_non" name="reconditionné" value="Reconditionné_non">
            <label for="reconditionné_non">Non</label><br>
            </form>
            <p>Combien de fois achetez-vous de nouveaux vêtements par an?</p>
            <form>
                <input type="radio" id="1_fois" name="shopping" value="1fois">
                <label for="1_fois">1 fois</label><br>
                <input type="radio" id="2_fois" name="shopping" value="2fois">
                <label for="2_fois">2 fois</label><br>
                <input type="radio" id="3_fois+" name="shopping" value="3fois+">
                <label for="3_fois+">3 fois ou plus</label><br>
            </form>
            <p>Achetez-vous de la seconde-main?</p>
            <form>
                <input type="radio" id="jamais" name="Seconde_main" value="Jamais">
                <label for="jamais">Jamais</label><br>
                <input type="radio" id="1_2fois" name="Seconde_main" value="1_2fois">
                <label for="1_2fois">1 à 2 fois par an</label><br>
                <input type="radio" id="souvent" name="Seconde_main" value="Souvent">
                <label for="souvent">Souvent</label><br>
                <input type="radio" id="toujours" name="Seconde_main" value="Toujours">
                <label for="toujours">Toujours</label><br>
            </form>
            <h3>Transports</h3>
            <p>Avez-vous une voiture?</p>
            <form>
                <input type="radio" id="voiture" name="mode_transport" value="oui">
                <label for="voiture">Oui</label><br>
                <input type="radio" id="voiture_non" name="mode_transport" value="non">
                <label for="voiture_non">Non</label><br>
            </form> 
            <p>Combien de fois prenez-vous l'avion par an?</p>
            <form>
                <input type="radio" id="jamais" name="Avion" value="Jamais">
                <label for="jamais">Jamais</label><br>
                <input type="radio" id="1fois" name="Avion" value="1Fois">
                <label for="1fois">1 fois</label><br>
                <input type="radio" id="2fois" name="Avion" value="2Fois">
                <label for="2fois">2 fois</label><br>
                <input type="radio" id="3fois+" name="Avion" value="3Fois+">
                <label for="3fois+">3 fois ou plus</label><br>
            </form>
            <p>Comment vous rendez-vous au travail?</p>
            <form>
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
            </form>
            <h3>Alimentation</h3>
            <p>Êtes-vous végétarien?</p>
            <form>
                <input type="radio" id="végétarien" name="régime" value="oui">
                <label for="végétarien">Oui</label><br>
                <input type="radio" id="végétariennon" name="régime" value="non">
                <label for="végétariennon">Non</label><br>
            </form>
            <p>Combien de fois faites vous vos courses par semaines?</p>
            <form>
                <input type="radio" id="1fois" name="Courses" value="1Fois">
                <label for="1fois">1 fois</label><br>
                <input type="radio" id="2fois" name="Courses" value="2Fois">
                <label for="2fois">2 fois</label><br>
                <input type="radio" id="3fois+" name="Courses" value="3Fois+">
                <label for="3fois+">3 fois ou plus</label><br>
            </form>
            <p>Quel pourcentage de la nourriture que vous achetez finit à la poubelle ? </p>
            <form>
                <input type="radio" id="zéro" name="nour_poubelle" value="0%">
                <label for="zéro">0 %</label><br>
                <input type="radio" id="2fois" name="nour_poubelle" value="Entre0_30%">
                <label for="Entre0_30%">Entre 0 et 30%</label><br>
                <input type="radio" id="3fois+" name="nour_poubelle" value="Entre30_50%">
                <label for="entre30_50%">Entre 0 et 50%</label><br>
                <input type="radio" id="plus_50%" name="nour_poubelle" value="Plus_50%">
                <label for="plus_50%">Plus de 50%</label><br>
            </form>
        </div>
        <div>
            <div id="retour">
                <a href="QCM.html"><input type="button" class="button" value="Retour"></a>
            </div>
            <div id="result">
                <input type="button" class="button" value=" Voir les résultats">
            </div>
        </div>