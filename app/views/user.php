<div class="grid-container">

    <?= $sideBar ?? null; ?>

    <!--début du milieu de page-->
    <main class="main-container">
        <div class="main-title">
            <p class="font-weight-bold">Tableau de bord</p>
        </div>
        <div class="main-cards">
            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">Température</p>
                    <span class="material-icons-outlined text-red">thermostat</span>
                </div>
                <span class="text-primary font-weight-bold">37°</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">Dioxyde de carbone</p>
                    <span class="material-icons-outlined">co2</span>
                </div>
                <span class="text-primary font-weight-bold">25 ppm</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">Humidité</p>
                    <span class="material-icons-outlined text-blue">water_drop</span>
                </div>
                <span class="text-primary font-weight-bold">26 g/m3</span>
            </div>

        </div>
        <br>
        <div class="qcm2">
            <p>QCM</p>
            <p> Votre score est 320 </p>
            <br>
            <a href="/qcm">
                <p>Cliquez ici pour améliorer votre score</p>
            </a>

        </div>

    </main>
</div>
