<?php
require_once "creation-car-page.php";

$user=$_SESSION["username"];
$pass=$_SESSION["password"];
$con=mysqli_connect("localhost","root","","amcars");
mysqli_set_charset($con,"utf8");
if(!$con){die("Connection failed : ".mysqli_connect_error());}
$user=$_SESSION["username"];
$pass=$_SESSION["password"];
$voiture=$id;
$prixj=$price;
$reqc="SELECT id_client FROM client where username='$user' AND password='$pass' ;";
$resultc=mysqli_query($con,$reqc);
/*-----------------Calcul nb Jours----------------------------------*/
$date1 = new DateTime($datedeb);
$date2 = new DateTime($datefin);
$interval = $date1->diff($date2);
$nbjr = $interval->days;
/*---------------------------------------------------------------------*/
if (mysqli_num_rows($resultc)==1){
    $rowc=mysqli_fetch_assoc($resultc);
    $client=$rowc["id_client"];
}
else echo "erreur client ";
$prixtotal=$nbjr*$prixj;
$loc="INSERT INTO location (datedeb,datefin,prixtotal,voiture,client) VALUES('$datedeb','$datefin',$prixtotal,$voiture,$client);";
$insertion_location=mysqli_query($con,$loc);
if (!$insertion_location)
{
    echo "echec";
}
else{
    echo "Succés!";
    $update="UPDATE voiture SET dispo='No' WHERE id_voiture='$voiture' ; ";
    $resultup=mysqli_query($con,$update);
    if (!$resultup) header("Location: ../index-login.php?rent=no");
    else header("Location: ../index-login.php?rent=yes");
}



?>