<?php


// Variables...
$lastName= $_POST['lastName'];
$firstName= $_POST['firstName'];
$email= $_POST['email'];
$passwordHash= $_POST['password'];
// $lastConnection= $_POST['prenom'];

$servername='localhost:3308';

// connexion to the database...



// try {
// 	$conn = new PDO("mysql:host=$servername;dbname=connexion", 'root', 'root');
// 	  // set the PDO error mode to exception
// 	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	  echo "Connected successfully";
// }
// catch(PDOException $e) {
// 	echo "Connection failed: " . $e->getMessage();
// }


$conn = mysqli_connect('localhost','root','root','colibrit', '3308');
if ($conn->connect_error){
	die('Erreur de conection : '.$conn ->connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO user (nom,prenom,email,passwordHash,lastConnection) VALUES(?,?,?,?,?)");
	$stmt->bind_param("sss",$nom,$prenom,$email);
	if ($stmt->execute()==true) {
		echo "Les données ont été enregistrées avec succès.";
	} else {
		echo $conn->error;
	}
	$stmt ->close();
	

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Table</title>
</head>
<style>
	th,table,td{
		border:1px solid black;
		border-collapse:collapse;
	}
</style>
<body>
	<table>
		<tr>
			<th>id_User</th>
			<th>nom</th>
			<th>prenom</th>
			<th>email</th>
			<th>LastConnection</th>
		</tr>
		<?php 
		$sql="SELECT * FROM user";
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
				echo "<tr>
						<td>$row[idUser]</td>
						<td>$row[lastName]</td>
						<td>$row[firstName]</td>
						<td>$row[email]</td>
                        <td>$row[lastConnection]</td>
						<td><a href='users.php?'>Delete</a><a href='traitement.php?'>Update</a></td>
					</tr>";
			}
		}
		else{
			echo "No result";
		}
		$conn->close();
		?>
	</table>
	
</body>
</html>















