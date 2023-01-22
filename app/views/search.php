<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }

    th {
        background-color: #88CAF0;
    }

    table {
        position: absolute;
        left: 10%;
        top: 280%;
        z-index: 2;
        /* height: 300px; */
        width: 60%;
        box-shadow: 0 2px 8px 0;
        border-radius: 12px 12px 0 0;
    }

    thead {
        /* position:absolute; */
        left: 30%;
        top: 80%;
    }

    tr:nth-child(odd) {
        background-color: #eeeeee;
    }
</style>

<?= $sidePanel ?? null ?>

<div class="container-header">
    <div class="header">
        <div class="nav">

            <form class="search" method="POST">
                <input type="text" placeholder="Rechercher..." name="search" required
                       value="<?php $this->escapeHtml($_POST['search']); ?>">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>lastname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                </tr>
                </thead>

                <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "colibrit", "3306");
                if (isset($_GET['search'])) {
                    $inputValue = $_GET['search'];
                    $sql = "SELECT * FROM user WHERE CONCAT(idUser,nom,prenom,email) LIKE '%$inputValue%' ";
                    $query_run = $conn->query($sql);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $items) {
                            ?>
                            <tr>
                                <td><?= $items['idUser']; ?></td>
                                <td><?= $items['nom']; ?></td>
                                <td><?= $items['prenom']; ?></td>
                                <td><?= $items['email']; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="4">No Record found</td>
                        </tr>
                        <?php
                    }
                } ?>
                </tbody>
            </table>


            <div class="user-connect">
                <a href='/register' class="btn">Add New</a>
                <img src="sonnette.jpg" alt="">
                <div class="img-case" style="color:black;">
                    <img src="user-b.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

</div>


<div>
    <h2 style="position:absolute;left:30%;top:18%;">List of Users</h2>

    <table>
        <!-- <tr>
                <th>Id_personne</th>
                <th>lastname</th>
                <th>Firstname</th>
                <th>Email</th>
            </tr> -->
        <?php
        // $sql="SELECT * FROM user";
        // $result=$conn->query($sql);
        // if ($result->num_rows > 0){
        //     while ($row = $result->fetch_assoc()){
        //         echo "<tr>
        //                 <td>$row[idUser]</td>
        //                 <td>$row[nom]</td>
        //                 <td>$row[prenom]</td>
        //                 <td>$row[email]</td>
        //             </tr>";
        //     }
        // }
        // else{
        //     echo "No result";
        // }
        // $conn->close();
        ?>
    </table>

</div>