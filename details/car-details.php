<?php
  require_once "creation-car-page.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voiture</title>
    
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="car-details.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>
<!--navbar-->
<!--<header class="header">
    <nav class="collapse">
        <img src="./img/log.png" alt="" class="logo">
        <ul class="nav-links">
            <li><a href="/index.html" class="home">HOME</a></li>
        </ul> 
    </nav>
</header>-->
<section class="titre" style="background-image:linear-gradient(rgba(255,255,255,.3),rgb(0, 0, 0)),url(<?=$bgr?>);">
    <div class="modele"><h3 class="nomv"><?= $marque." ".$model; ?> </h3></div>
</section>
<section class="details">

    <div class="image">
        <div class="slider">
            <img src=<?= $img1; ?> >
            <img src=<?= $img2; ?> >
            <img src=<?= $img3; ?> >
            <button class="prev arrow-left"><div></div></button>
            <button class="next arrow-right"><div></div></button>
        </div>
    </div>
    <form name="myf" id="myf" action="location.php?id=<?=$id?>" method="POST" onsubmit="return verifdate()">
    <div class="caracteristique">
        <ul>
            <li class="element-list">
                <div class="">
                     <span class="" >Disponibilty </span>
                     <strong class="" id="disp"><?= $dispo ?></strong>
                </div>
           </li>
        </ul>
        <ul>
            <li class="element-list">
                <div class="">
                     <span class="">Model</span>
                     <strong class="" name="modele"><?= $model ?></strong>
                </div>
           </li>
          </ul>
          <ul>
            <li class="element-list">
              <div class="">
                     <span class="">Seats</span>
                     <strong class=""><?= $seats ?></strong>
                </div>
           </li>
        </ul>
        <ul>
            <li class="element-list">
                <div class="">
                     <span class="">Fuel</span>
                     <strong class=""><?= $fuel ?></strong>
                </div>
           </li>
          </ul>
        <ul>
            <li class="element-list">
              <div class="">
                <span class="" id="prix">Price per day</span>
                <strong class="" id="prixjour" name="prix" value=<?=$price?>><?= $price.' DT'?></strong>
              </div>
            </li>
          </ul>
          <ul>
  <li class="element-list">
    <div class="">
      <span class="" id="prix">From</span>
      <strong class="" id=""><input type="date" class="dateachat" name="datedeb" id="datedeb" oninput="calNbjour(<?=$price?>)" value="<?php echo date('Y-m-d'); ?>"></strong>
    </div>
  </li>
  <li class="element-list">
    <div class="">
      <span class="" id="prix">To</span>
      <strong class="" id=""><input type="date" class="dateachat" name="datefin" id="datefin" oninput="calNbjour(<?=$price?>)" value="<?php echo date('Y-m-d'); ?>"></strong>
    </div>
  </li>
  <li class="element-list">
    <div class="">
      <span class="" id="prix">Total price</span>
      <strong class="" id="prix-tootal" value="0" name="a">0 DT</strong>
    </div>
  </li>
</ul>
</div>
<div class="conainter2"><button type="submit" class="rentnow" >RENT NOW</button></div>
<script>
  function verifdate(){
  var date1=new Date(document.getElementById("datedeb").value);
  var date2=new Date(document.getElementById("datefin").value);
  var x = date2.getTime() - date1.getTime();
  var dispo=document.getElementById('disp').innerHTML;
  if(dispo=='No') {
    Swal.fire('Sorry <?=$_SESSION['username']?> this vehicle is not available!', '', 'error');
    return false ;
  }
  if(x<=0){
    Swal.fire('Invalid date!', 'Please Retry', 'error');
    return false ;
  }
  else return true;
}
</script>
</form>
</section>
<section class="rent">
    <div class="container1">
        <div class="element"><img src="../car-details/quality-service.png" alt="" class="icon"><legend><span>Quality</span></legend></div>
        <div class="element"><img src="../car-details/low-price.png" alt="" class="icon"><legend><span>Cheapest Prices</span></legend></div>
        <div class="element"><img src="../car-details/customer-service.png" alt="" class="icon"><legend><span>Satisfied Clients</span></legend></div>
    </div>
    
</section>
<footer >
        <h3><i><span>AM</span>Cars</i></h3>
        <p>AMCars is a luxury car rental company, in other words high-end cars, founded by Abir Boukhris and Maher Bouchrara and using this site you can make an online reservation and save time.</p>
        <ul>
            <li><a href=""><img src="../img/facebook.png" alt="" height="30px"></a></li>
            <li><a href=""><img src="../img/instagram.png" alt="" height="30px"></a></li>
            <li><a href=""><img src="../img/linkedin.png" alt="" height="30px"></a></li>
            <li><a href=""><img src="../img/tweeter.png" alt="" height="30px"></a></li>
        </ul>
        <p class="hh">&copy; by <span>AM</span>Car</p>
</footer>
<link rel="stylesheet" href="./car-details.css">
<script src="../sweetalert2@11.js"></script>
</body>
</html>