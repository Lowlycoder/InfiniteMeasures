<?= $sidePanel ?? null ?>
<div id="band">
    <h2 style="padding: 40px 0 0 90px;color:#88CAF0;">Capteurs</h2>
</div>

<div class="flex-row">
    <div style="width:550px;height:300px;" class="box-stat">
        <canvas id="firstChart"></canvas>
    </div>

    <div style="width:550px;height:300px;" class="box-stat">
        <canvas id="secondChart"></canvas>
    </div>

    <div style="width:550px;height:300px;" class="box-stat">
        <canvas id="thirdChart"></canvas>
    </div>
</div>


<script>
    // Capteur de Co2

    var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yValues = [0, 3, 8, 9, 9, 8, 10, 11, 15, 14, 16, 19, 20];
    const stat1 = document.getElementById("secondChart");
    new Chart(stat1, {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: "CO2",
                backgroundColor: "rgba(0,0,5,1.0)",
                borderColor: "rgba(0,7,0,0.1)",
                data: yValues,
            }],
        },

    });


    // Capteur d'Humidité

    var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yValues = [0, 8, 8, 14, 11, 16, 18, 11, 14, 14, 15, 20];
    const stat2 = document.getElementById("firstChart");
    new Chart(stat2, {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: "Humidité",
                backgroundColor: "blue",
                borderColor: "rgba(0,99,132)",
                data: yValues,
            }],
        },

    });


    // Capteur de température

    var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yValues = [0, 8, 12, 14, 16, 16, 9, 11, 13, 10, 15, 20];
    const stat3 = document.getElementById("thirdChart");
    new Chart(stat3, {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: "Température",
                backgroundColor: "red",
                borderColor: "rgb(153, 52, 52);",
                data: yValues,
            }],
        },

    });
</script>