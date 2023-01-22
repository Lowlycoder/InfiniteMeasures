<?= $sidePanel ?? null ?>

<div id="band">
    <h2 style="padding: 40px 0 0 90px;color:#88CAF0;">Statistiques</h2>
</div>

<div class="flex-row">
    <div style="width:550px;height:300px;" class="box-stat">
        <canvas id="firstChart"></canvas>
    </div>

    <div style="width:550px;height:300px;" class="box-stat">
        <canvas id="secondChart"></canvas>
    </div>

    <!-- <div style="width:550px;height:300px;" class="box-stat">
        <canvas id="thirdChart"></canvas>
    </div> -->

    <!-- <div style="width:550px;height:300px;" class="box-stat">
        <canvas id="fourthChart"></canvas>
    </div> -->
</div>

<!--code graphique des revenues mensuelles-->

<script>
    var xValues = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var yValues = [155, 149, 144, 164, 168, 175, 146, 151, 155, 167, 142, 163];
    var barColors = ["red", "darkkhaki", "blue", "orange", "brown", "yellow", "cyan", "grey", "violet", "darkgreen", "lightsalmon", "black"];

    new Chart("firstChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                label: "Earning",
                backgroundColor: barColors,
                data: yValues,
            }],
        },
        options: {
            title: {
                display: true,
                text: "Production of year",
            },
        },
    });


    // code graphique des visiteurs

    var xValues = ["Visitors", "Clients"];
    var yValues = [355, 149];
    var barColors_2 = ["green", "blue"];


    new Chart("secondChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors_2,
                data: yValues,
            }],
        },
        options: {
            title: {
                display: true,
                text: "Users",
            },
        },
    });
</script>