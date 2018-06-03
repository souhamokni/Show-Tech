<?php
$conn = new mysqli("localhost","root","123456789a","DAW");
$nom=$_POST["author"];
$email=$_POST["email"];
$subject=$_POST["subj"];
$message=$_POST["text"];
$req="INSERT INTO messages(nom,email,subjectt,messagee) VALUES ('$nom', '$email', '$subject', '$message')";
$conn->query($req);
header('Location: contact.html');
?>