<?php
$con=new mysqli("localhost","root","123456789a","DAW");
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$req="INSERT INTO  users(nom,prenom,email,passwords) VALUES ('$nom','$prenom','$email','$pass')";
$con->query($req);
header('Location: ./login.html ');
?>
