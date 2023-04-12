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
$reqc="SELECT id_client FROM client where username='$user' AND password='$pass' ;";
$resultc=mysqli_query($con,$reqc);
if (mysqli_num_rows($resultc)==1){
    $rowc=mysqli_fetch_assoc($resultc);
    $client=$rowc["id_client"];
}
else echo "erreur client ";
$prixtotal=$_POST["prix-tootal"];
echo "tot".$prixtotal;
echo "\n".$datedeb."/".$datefin."/".$prixtotal."/".$client."/".$voiture ;
//$loc="INSERT INTO location (datedeb , datefin , prixtotal , voiture , client ) VALUES($datedeb,$datefin,$prixtotal,$voiture,$client);";


?>