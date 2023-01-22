<?= $sidePanel ?? null ?>
<div class="container-header">
    <!-- Header de la page admin -->
    <div class="header">
        <div class="nav">
            <div class="search">
                <input type="text" placeholder="Search..">
                <button type="submit"><img src="<?= BASE_URL_ASSETS ?>images/search.png" alt=""></button>
            </div>
            <div class="user-connect">
                <a href="#" class="btn">Add New</a>
                <img src="<?= BASE_URL_ASSETS ?>images/sonnette.jpg" alt="">
                <div class="img-case" style="color:black;">
                    <img src="<?= BASE_URL_ASSETS ?>images/user-b.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div id="content-cards">

            <div class="card">
                <div class="box">
                    <h1>352</h1>
                    <h3>Utilisateurs</h3>
                </div>
                <div class="case">
                    <i class="fa-regular fa-user fa-4x"></i>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h1>200</h1>
                    <h3>Capteurs</h3>
                </div>
                <div class="case">
                    <img src="<?= BASE_URL_ASSETS ?>images/captor.png" alt="" width="100px" height="100px">
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <h1>35200</h1>
                    <h3>Income</h3>
                </div>
                <div class="case">
                    <img src="<?= BASE_URL_ASSETS ?>images/income.jpg" alt="" width="100px" height="100px">
                </div>
            </div>
        </div>

        <div id="content2">
            <div id="content-title">

                <div class="title-table">
                    <h2>Recent payment</h2>
                    <a href="#" class="btn">View all</a>
                </div>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Society</th>
                        <th>Amount</th>
                        <th>Option</th>
                    </tr>

                    <tr>
                        <td>Joul cat</td>
                        <td>St. James College</td>
                        <td>€120</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                    <tr>
                        <td>John Doe</td>
                        <td>St. James College</td>
                        <td>€120</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                    <tr>
                        <td>Moul Jay</td>
                        <td>St. James College</td>
                        <td>€120</td>
                        <td><a href="#" class="btn">View</a></td>
                    </tr>

                </table>

            </div>

        </div>


    </div>

</div>