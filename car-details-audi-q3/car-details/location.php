<?php
session_start();

$conn=mysqli_connect("localhost","root","","amcars");
mysqli_set_charset($conn,"utf8");
if(!$conn){die("Connection failed : ".mysqli_connect_error());}

$datedeb=$_POST["datedeb"];
$datefin=$_POST["datefin"];
$prixtotal=$_POST["prixtotal"];
$modele=$_POST["modele"];
$req="SELECT * FROM voiture WHERE modele='$modele'; "

?>