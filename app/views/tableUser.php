<?= $sidePanel ?? null ?>

<div class="container-header">
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


    <div id="content2">

        <div id="content-title">

            <div class="title-table">
                <h2>Liste des utilisateurs</h2>
                <a href="#" class="btn">Ajout</a>
            </div>
            <table id="snd-table">
                <tr>
                    <th>Id</th>
                    <th>lastname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Opération</th>
                </tr>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'colibrit', '3306');
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
                                    <a class='btn' href='edit?id=$row[idUser]'>Update</a>
                                    <a class='btn2' href='delete?id=$row[idUser]'>Delete</a>
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
