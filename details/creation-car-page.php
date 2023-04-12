<?php
session_start();

$conn=mysqli_connect("localhost","root","","amcars");
mysqli_set_charset($conn,"utf8");
if(!$conn){die("Connection failed : ".mysqli_connect_error());}
if (isset($_POST["datedeb"])) $datedeb=$_POST["datedeb"];
if (isset($_POST["datefin"])) $datefin=$_POST["datefin"];
//if (isset($_POST["prix-tootal"])) $prixtotal=$_POST["prix-tootal"];
else $prixtotal=0;
if (isset($_GET["id"])) $id=$_GET["id"];
$x=$id ;
$req="SELECT * FROM voiture WHERE id_voiture='$x' ;";
$result=mysqli_query($conn,$req);
if(mysqli_num_rows($result)==0) {
    echo "Erreur";
}
else{
    $row = mysqli_fetch_assoc($result);
    $img1=$row["img1"];
    $img2=$row["img2"];
    $img3=$row["img3"];
    $bgr=$row["bg"];
    $model=$row["model"];
    $seats=$row["seats"];
    $price=$row["price_day"];
    $dispo=$row["dispo"];
    $fuel=$row["fuel"];
    $id_marque=$row["marque"];
    $req2="SELECT * FROM marque  WHERE id_marque='$id_marque' ;" ;
    $result2=mysqli_query($conn,$req2);
    if(mysqli_num_rows($result2)==0) {
        echo "Erreur";
    }
    else{
        $row2=mysqli_fetch_assoc($result2);
        $marque=$row2["libelle"];
    }
}

?>