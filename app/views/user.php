<div class="grid-container">




    <!--début de la sidebar-->
    <aside id="sidebar">
        <div class="sidebar-title">
            <div class="sidebar-brand">
                <span class="material-icons-outlined">home</span> Bonjour, john jones
            </div>
            <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="/dashboard"><span class="material-icons-outlined">dashboard</span>Tableau de Bord</a>
            </li>
            <li class="sidebar-list-item">
                <a href="/capteursUser"><span class="material-icons-outlined">insert_chart</span>Statistiques
                    Capteurs</a>
            </li>
            <li class="sidebar-list-item">
                <a href="/reglages"><span class="material-icons-outlined">settings</span>Réglages</a>
            </li>
        </ul>
    </aside>
    <!--fin de la sidebar-->




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
        </br>
        <div class="qcm2">
            <p>QCM</p>
            <p> Votre score est 320 </p>
            </br>
            <a href="/qcm">
                <p>Cliquez ici pour améliorer votre score</p>
            </a>

        </div>


    </main>
</div>