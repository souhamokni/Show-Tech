<?php 
$conn = new mysqli("localhost", "root", "123456789a", "DAW");
session_start();
$id=$_SESSION["id"];
$image = $_FILES["image"]["name"];
$namep=$_POST["namep"];
$type=$_POST["type"];
$prix=$_POST["prix"];
$descriptions=$_POST["description"];
$description= str_replace("'","\'", $descriptions);
if ($image==="")
{
$req="UPDATE produits SET nameP ='$namep',descriptions='$description', prix= '$prix',prix='$prix' WHERE id='$id'  ";
}
else{
    $req="UPDATE produits SET nameP ='$nameP',descriptions='$description', prix= '$prix', images='$image',prix='$prix' WHERE id='$id'  ";

}
$conn->query($req);
header('Location: admin.php');
?>

