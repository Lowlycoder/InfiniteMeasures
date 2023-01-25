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
                    <p>Température</p>
                    <span class="material-icons-outlined text-red">thermostat</span>
                </div>
                <spanfont-weight-bold">37°</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <p>Dioxyde de carbone</p>
                    <span class="material-icons-outlined">co2</span>
                </div>
                <spanfont-weight-bold">25 ppm</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <p>Humidité</p>
                    <span class="material-icons-outlined text-blue">water_drop</span>
                </div>
                <spanfont-weight-bold">26 g/m3</span>
            </div>

        </div>
        <br>
        <div class="card flex-row" style="border-left: 7px solid #27d721b6">
            <div class="col-md">
                <p>QCM</p>
                <p> Votre empreinte carbone annuelle est de 9 tonnes de C02 </p>
            </div>
            <div class="col-md w-100 text-end justify-content-end align-items-center d-flex">
                <a href="/qcm">Cliquez ici pour recalculer votre empreinte carbone</a>
            </div>
        </div>
    </main>
</div>