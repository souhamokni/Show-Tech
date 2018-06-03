<?php
$conn = new mysqli("localhost","root","123456789a","DAW");
session_start();
if  (($_POST["email"]==="admin@admin" )and ($_POST["pass"]==="admin"))
{
	header('Location: ./admin.php');
}
$sql = "SELECT email,passwords FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if  (($_POST["email"]===$row["email"] )and ($_POST["pass"]===$row["passwords"]))
		{
			header('Location: ./login/index.php');
		}
    }
} else {
    echo "0 results";
}
echo "entrer votre adresse et votre mot de passe";
$_SESSION["email"]=$_POST["email"];

$conn->close();
?>
