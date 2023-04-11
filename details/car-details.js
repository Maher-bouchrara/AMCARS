$(document).ready(function() {
  var slider = $('.slider');
  var images = slider.find('img');
  var prevBtn = slider.find('.prev');
  var nextBtn = slider.find('.next');
  var index = 0;
  images.not(':first').hide(); // hide all images except the first one
  setInterval(function() {
    images.eq(index).fadeOut();
    index = (index + 1) % images.length;
    images.eq(index).fadeIn();
  }, 2000);
  prevBtn.click(function() {
    images.eq(index).fadeOut();
    index = (index - 1 + images.length) % images.length;
    images.eq(index).fadeIn();
  });
  nextBtn.click(function() {
    images.eq(index).fadeOut();
    index = (index + 1) % images.length;
    images.eq(index).fadeIn();
  });
});
function calculprix() {
  const nbjrInput = document.getElementById("nbjr");
  const prixTotalElement = document.getElementById("prix-total");
  const prixUnitaire = 150; // prix unitaire en DT

  const nbjr = nbjrInput.value;
  const prixTotal = nbjr * prixUnitaire;

  prixTotalElement.textContent = prixTotal + " DT";
}
function calNbjour(){
  var date1=new Date(document.getElementById("datedeb").value);
  var date2=new Date(document.getElementById("datefin").value);
  var differenceEnMillisecondes = date2.getTime() - date1.getTime();
  var differenceEnJours = differenceEnMillisecondes / (1000 * 60 * 60 * 24);
  var prixtotal=document.getElementById("prix-tootal");
  var pr=Number(document.getElementById("prixjour").value);
  if(differenceEnJours>=0){
    prixtotal.textContent = pr*differenceEnJours+" DT";
    prixtotal.setAttribute('value',pr*differenceEnJours);
  }
  else{ 
    prixtotal.textContent ="Invalid Date!";
    alert("Invalid date!");
  }
}

function verifdate(){
  var date1=new Date(document.getElementById("datedeb").value);
  var date2=new Date(document.getElementById("datefin").value);
  var x = date2.getTime() - date1.getTime();
  if(x<=0){
    alert("Invalid date!");
    return false ;
  }
  else return true;
}