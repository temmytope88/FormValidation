var male = document.getElementById("male");
var female = document.getElementById("female");

function malecheck(){
   if((female.checked) == true){
      female.checked = false;
   }
}

function femalecheck(){
  if((male.checked) == true){
     male.checked = false;
  }
}