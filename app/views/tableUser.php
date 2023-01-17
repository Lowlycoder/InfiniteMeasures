<?php
$conn = mysqli_connect('localhost', 'root', '', 'colibrit', '3306');
?>

<div id="side-menu">
    <div id="brand-name">
        <h1>Panel</h1>
    </div>
    <ul>
        <li><a href="#"><img src="images\dashboard.png" alt="" width="35px" height="35px">&nbsp;<span>Dashboard</span></a></li>
        <li><a href="#"><img src="images\uuser.png" alt="" width="35px" height="35px">&nbsp;<span>Users</span></a></li>
        <li><a href="#"><img src="images\capteur.png" alt="" width="40px" height="40px">&nbsp;<span>Capteurs</span></a></li>
        <li><a href="#"><img src="images\stat.png" alt="" width="40px" height="40px">&nbsp;<span>Statistiques</span></a></li>
        <li><a href="#"><img src="images\research.png" alt="" width="40px" height="40px">&nbsp;<span>Research</span></a></li>
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
                <img src="images\sonnette.jpg" alt="">
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

            <div id="content-title">

                <div class="title-table">
                    <h2>Liste des utilisateurs</h2>
                    <a href="#" class="btn">Ajout</a>
                </div>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>lastname</th>
                        <th>Firstname</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Opération</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM user";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>$row[idUser]</td>
                                    <td>$row[nom]</td>
                                    <td>$row[prenom]</td>
                                    <td>$row[email]</td>
                                    <td>$row[lastConnection]</td>
                                    <td>
                                        <a class='btn' href='EditUser.php?id=$row[idUser]'>Update</a>
                                        <a class='btn2' href='deleteUser.php?id=$row[idUser]'>Delete</a>
                                    </td>
                                </tr>";
                        }
                    } else {
                        echo "No result";
                    }
                    $conn->close();
                    ?>
                </table>
            </div>
        </div>
    </div>

</div>