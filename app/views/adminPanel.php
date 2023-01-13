<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\css\adminPanel.css">
    <title>adminPanel</title>
</head>


<body>
    <div id="side-menu">
        <div id="brand-name">
            <h1>Panel</h1>
        </div>
        <ul>
            <li><a href="#"><img src="images\dashboard.png" alt="" width="35px" height="35px">&nbsp;<span>Dashboard</span></a></li>
            <li><a href="#"><img src="images\uuser.png" alt="" width="35px" height="35px">&nbsp;<span>Users</span></a></li>
            <li><a href="#"><img src="images\capteur.png" alt="" width="40px" height="40px">&nbsp;<span>Capteurs</span></a></li>
            <li><a href="#"><img src="images\stat.png" alt="" width="40px" height="40px">&nbsp;<span>Statistiques</span></a></li>
        </ul>
        </div>
    </div>

    <div class="container-header">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="images\search.png" alt=""></button>
                </div>
                <div class="user-connect">
                    <a href="#" class="btn">Add New</a>
                    <img src="images\sonnette.jpg" alt="" >
                    <div class="img-case" style="color:black;">
                        <img src="user-b.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div id="content-cards">

                <div class="card">
                    <div class="box">
                        <h1>35200</h1>
                        <h3>Users</h3>
                    </div>
                    <div class="case">
                        <img src="images\user-c.jpg" alt="" width="100px" height="100px">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>200</h1>
                        <h3>Capteurs</h3>
                    </div>
                    <div class="case">
                        <img src="images\captor.png" alt="" width="100px" height="100px">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>35200</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="case">
                        <img src="images\income.jpg" alt="" width="100px" height="100px">
                    </div>
                </div>

            </div>

            <div id="content2">

                <div id="content-payment">

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
    
</body>
</html>