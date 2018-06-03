<?php
// Create connection
 $conn = new mysqli("localhost", "root", "123456789a", "DAW");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$image = $_FILES["image"]["name"];
$namep=$_POST["namep"];
$type=$_POST["type"];
$prix=$_POST["prix"];
$descriptions=$_POST["description"];
$description= str_replace("'","\'", $descriptions);
$sql = "INSERT INTO produits(nameP,typee,descriptions,images,prix) VALUES ('$namep', '$type', '$description', '$image','$prix')";
$conn->query($sql);
header('Location: ./admin.php'); 
?>