<?php 
session_start();
if ( $_SESSION['auth'] != true ) {
    header('location:authentification.php');
    


}
 ?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleof.css">
  <link rel="stylesheet" type="text/css" href="style.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!--css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" />
   

   
    <!--js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
      
<style>
.navbar-default .navbar-brand { /*changer la couleur du text accueil*/
      color: white;
    }

    .navbar-default .navbar-nav>li>a,
    .navbar-brand {/* changer la couleur des lien de la barre de navigation*/
      color: white;
    }

    .navbar-default {
      background-color: rgba(51, 51, 51, 0.5);/* changer la couleur de la barre de navigation*/
    }

</style>
</head>



<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}
@media (max-width: 768px) {
  
  #regForm {
    background:linear-gradient(0deg,rgba(25,0,0,0.8),rgba(211,211,211,0.4)),url("https://tse2.mm.bing.net/th?id=OIP.g50GOlQifP4M3hM4KiDvCwHaHa&pid=Api&P=0&w=300&h=300");
   
    margin-right: auto;
    margin-left: auto;
    font-family: Raleway;
    padding: 40px;
    min-width: 500px;

    height: 230vh; 
    background-size:cover;
  
  background-position:center;
  
  
  }
  .bout {
  margin-top: 30px;
}
  
  .navbar-default{
      
    padding: 0px;
    min-width: 500px;
        
  }
  
  }
  
@media (min-width: 768px) {
  
  #regForm {
    background:linear-gradient(0deg,rgba(25,0,0,0.8),rgba(211,211,211,0.4)),url("LOGO_KLUBB_FRANCE.jpg");
   
    margin-right: 100px;
    margin-left: 100px;
    font-family: Raleway;
    padding: 40px;
    min-width: 500px;


    height: 95vh; 
    background-size:cover;
  
  background-position:center;
  
  
  
  
  
   
  }
 
  }


h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

.bout {
  margin-top: 360px;
}

</style>
</style>
<body >

<nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
           
            <a class="navbar-brand" href="acceuil.php"><span class="glyphicon glyphicon-home"></span> Accueil</a>
            
        
        </div>
              <a style="float:right;" class="navbar-brand" href="LogOut.php"><span  class="glyphicon glyphicon-log-in "></span> Déconnexion</a>
      
        
                        
                        
        
    </nav>
<form id="regForm" action="validationcommercial.php" method="post" >
  <h1>Commercial</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <legend class="text-center col-md-12"> Informations sur le véhicule</legend>
    
    
    <div class="form-group col-md-4">
                        <label for="numero" class="control-label ">Numéro d'offre:</label>
                        <!-- <input class="form-control" name="numero" id="numero" type="text"  required> -->
                        <input class="form-control" type="number" id="offre" placeholder="renseingez ce champs " name="offre" aria-required>
                        <script>window.onload=f1</script>
   
    <script>
     function f1()
       {
    var offre=document.getElementById('offre');
if(offre.value =="") {
alert("Veuillez entrer votre Nom svp");

return false;
}
       }
    </script>
                           
                    </div>
                    
  
     <div class="form-group col-md-4">
                        <label for="cat" class="control-label ">Marque:</label>
                        
                        
                        <select class="form-control" name="marque" id="marque">
                            
                        <?php 
                         
                         include('database.php');
                         $select=$bdd->query('SELECT marque FROM vehicule');
                         while ($donnee=$select->fetch()) {
                             $marque=$donnee['marque'];
                             echo('<option >
                             '.$marque.'
                                              
                                              
                                              </options>' );
                         }
                       
                      
                         
                       
                         
?>
                        </select>
                                                   
      </div>
       
      <div class="form-group col-md-4">
                        <label for="cat" class="control-label ">Modele:</label>
                        
                        
                        <select class="form-control" name="modele" id="modele" >
                     
                   
                        <?php 
                         
                         include('database.php');                    
                        
                        
                         $select=$bdd->query('SELECT * FROM vehicule' );
	
                 
                         
                         
                         while ($donnee=$select->fetch()) {
                         
                        $modele=$donnee['modele'];
                        
                         
                         
                            
                             echo('<option > '.$modele.' </options>' );
                    
                         

                          
                        
                      
                      }
                    
                         
?>
                        </select>
                                                   
      </div>


      <div class="form-group col-md-4" id="choice">
                        <label for="choix" class="control-label ">Type de carosserie:</label>
                        <select class="form-control" name="choix" id="choix">
                            
                            <option value="tronquage">tronquage</option>
                            <option value="plateforme">plateforme</option>
                            <option value="plateau">plateau</option>
                        </select>
                        
                           
                    </div> 

            <div class="form-group col-md-4" id="formplateau">
                        <label for="date" class="control-label ">Format:</label>
                        
                        <select class="form-control" name="formatplateau" id="formatplateau">
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>

                        </select>
            </div>

                        <div class="form-group col-md-4" id="formplateforme">
                        <label for="date" class="control-label ">Format:</label>
                        <select class="form-control" name="formatplateforme" id="formatplateforme">
                        
                            <option value="L1H1">L1H1</option>
                            <option value="L1H2">L1H2</option>
                            <option value="L2H2">L2H2</option>
                            <option value="L3H2">L3H2</option>
                            
                        </select>
                        </div>

                        <div class="form-group col-md-4"id="formtronquage">
                        <label for="date" class="control-label ">Format:</label>
                        <select class="form-control" name="formattronquage" id="formattronquage">
                            
                            <option value="L2H2">L2H2</option>
                            <option value="L3H2">L3H2</option>
                            
                        </select>
                        </div>

                        <script>




                        var fplateau=document.getElementById('formplateau');
                        fplateau.style.display='none';
                        var fplateforme=document.getElementById('formplateforme');
                        fplateforme.style.display='none';
                        
                        
                        
                        var select= document.getElementsByTagName('select')[2];
                select.onchange = function(){
                  var fplateau=document.getElementById('formplateau');
                        
                        var fplateforme=document.getElementById('formplateforme');
                        var ftronquage=document.getElementById('formtronquage');
                            
                  

if(this.value =="tronquage" ){
  fplateforme.style.display='none';
  fplateau.style.display='none';
  ftronquage.style.display='block'; 
}else if(this.value =="plateforme"){
  fplateforme.style.display='block';
  fplateau.style.display='none';
  ftronquage.style.display='none'; 
}else{
  fplateforme.style.display='none';
  fplateau.style.display='block';
  ftronquage.style.display='none';
}

 
}
               </script>
                   
                    
                

                    <div class="form-group col-md-4">
                        <label for="salle" class="control-label ">PTAC:</label>
                        <input class="form-control" name="ptac" id="ptac" type="text" placeholder="entrer la valeur" required="required"/>
                           
                    </div>


                    <div class="form-group col-md-4">
                        <label for="salle" class="control-label ">Nombre de place en cabine:</label>
                        <input class="form-control" name="nbrplace" id="nbrplace"  placeholder="entrer le nombre" required="required"/>
                           
                    </div> 

                    <!-- <div class="form-group col-md-4">
                        <label for="salle" class="control-label ">Désignation:</label>
                        
<select class="form-control" name="designation[]"  multiple>
    <option value="35S">35S</option>
    <option value="35C">35C</option>
    <option value="50C">50C </option>
    <option value="70C">70C</option>
    <option value="55S">55S</option>
    <option value="55C">55C </option>
    <option value="70S">70S </option>
       
</select>
                        
                           
                    </div>   -->
                   

                   
 </div>
  

  <div class="tab">
  <legend class="text-center col-md-12"> Informations sur la nacelle</legend>
          <form class="form-inline form-group">

           
            <div class="form-group col-md-4">
                        <label for="modelenacelle" class="control-label">Modele:</label>
                        <select class="form-control" name="modelenacelle" id="modelenacelle">
                            
                        <?php 
                         
                         include('database.php');
                         $select=$bdd->query('SELECT modele FROM nacelle');
                         while ($donnee=$select->fetch()) {
                             $modele=$donnee['modele'];
                             echo('<option>
                             '.$modele.'
                                              
                                              
                                              </options>' );
                         }
                       
                      
                         
                       
                         
?>
                            
            </select>
                    </div>
             <div class="form-group col-md-4" id="paniernac">
                        <label for="panier" class="control-label">Panier:</label>
                        <select class="form-control" name="paniernacelle" id="paniernacelle">
                            
                            <option value="1P">1P</option>
            <option value="2P" >2P</option>
            </select>
                    </div>

            <div class="form-group col-md-4" id="panierrotati">
                        <label for="panierrotatif" name="panierrota" class="control-label">Panier rotatif:</label>
                        <select class="form-control" name="panierrotatif" id="panierrotatif">
                            
                            <option value="OUI">OUI</option>
            <option value="NON" selected>NON</option>
                    </select>

                   

                    
                    </div>
            <div class="form-group col-md-4" id="stabi">
                        <label for="stabilisateur" class="control-label ">stabilisateur:</label>
                        
                        <select class="form-control" name="stabil" id="stabil" >
                            
                            <option value="OUI">OUI</option>
                            <option value="NON" selected>NON</option>
                        </select>
            </div>
            <div class="form-group col-md-4" id="st">
                        <label for="stabilisateur" class="control-label ">stabilisateur:</label>
                        <input class="form-control" name="stt" id="stt"  value="OUI" disabled="disabled" >
                         
                            
                        
            </div>
            <div class="form-group col-md-4" id="nbrst">
            <label for="stabilisa" class="control-label " id="stab">nombre de stabilisateur:</label>
           
            <select class="form-control" name="stabilisat" id="stabilisat" >
                            
                            <option value="2">2</option>
            <option value="4">4</option>
            </select>
            
                    </div>




                    <script type="text/javascript">

var panier=document.getElementById('panierrotati');
panier.style.display='none';
var st = document.getElementById('st');
st.style.display='none';


                
                    $("#stabi").insertAfter("#paniernac");
                  panier.style.display='none';
  
  
               var select= document.getElementsByTagName('select')[7];
                select.onchange = function(){
                  
                  var nbrst = document.getElementById('nbrst');

                  var panier=document.getElementById('panierrotati');
                 
 
                
                var s = document.getElementById('stabi');
                

                
                

if(this.value =="2P"){
 
  st.style.display='block';
  s.style.display='none';
  nbrst.style.display='block';
 
  panier.style.display='block';
  
   
    $("#panierrotati").insertAfter("#paniernac");
}else if(this.value=="1P"){
  st.style.display='none';
  s.style.display='block';
  nbrst.style.display='none';
  
  panier.style.display='none';
 
  $("#stabi").insertAfter("#paniernac");
}

 
}
               </script>
























                    <script type="text/javascript">
                    var nbrst = document.getElementById('nbrst');
                    nbrst.style.display='none';
               var select= document.getElementsByTagName('select')[8];
                select.onchange = function(){
                  


if(this.value =="NON"){
    nbrst.style.display='none';
   
   
    
}
else if(this.value=="OUI"){
  nbrst.style.display='block';
  
    
}
 
}
               </script>

  </div>

<div class="tab">  
   <legend class="text-center col-md-12"> Informations sur les Equipements</legend>                        
                         <div id="planche" class="form-group col-md-4">
                        <label for="plancher" class="control-label">Plancher:</label>
                        <select class="form-control" name="plancher" id="plancher">
                            <option value="Avec">Avec</option>
                            <option value="Sans" selected>Sans</option>
                        </select>
                        </div>
                        <div id="plancc" class="form-group col-md-4">
                        <label for="plan" class="control-label " id="plan">veuillez choisir:</label>

                        <select class="form-control" name="planch" id="planch">
                            <option value="Bois">Bois</option>
                            <option value="Pvc">Pvc</option>
                        </select>

                   </div>

                    



                    <script type="text/javascript">
                    $(document).ready(function(){
                      $("#parois").insertAfter("#planche");
                    });
                     
                    var p = document.getElementById('planch');
 var pp= document.getElementById('plan');
 p.style.display='none';
    pp.style.display='none';
   
               var select= document.getElementsByTagName('select')[11];
                select.onchange = function(){
 
 var p = document.getElementById('planch');
 var pp= document.getElementById('plan');


  if(this.value =="Sans"){
    p.style.display='none';
    pp.style.display='none';
     $("#parois").insertAfter("#planche");
     $("#etg").insertAfter("#parois");
    
     $("#options").insertAfter("#etg");
    
   
    
}
else{
    p.style.display='block';
    pp.style.display='block';
  $("#plancc").insertAfter("#planche");
  
}
 
}
               </script>

                    <div id="parois" class="form-group col-md-4">
                        <label for="parois" id="pa" class="control-label">Parois:</label>
                        
                        <select class="form-control" name="parois" id="parois">
                            <option value="Avec">Avec</option>
                            <option value="Sans" selected>Sans</option>
                        </select>
                    </div>
                    <div  id="proiss" class="form-group col-md-4">
                        <label for="paroi" class="control-label " id="paroi">veuillez choisir:</label>

                        <select class="form-control" name="par" id="par">
                            <option value="Bois">Bois</option>
                            <option value="Pvc">Pvc</option>
                        </select>

                   

                    </div>



                    <script type="text/javascript">
                    $(document).ready(function(){
                       $("#etg").insertAfter("#parois");
                    });
var p = document.getElementById('paroi');
 var pp= document.getElementById('par');
p.style.display='none';
    pp.style.display='none';
               var select= document.getElementsByTagName('select')[13];
                select.onchange = function(){
 
 var p = document.getElementById('paroi');
 var pp= document.getElementById('par');
 

if(this.value =="Sans"){
    p.style.display='none';
    pp.style.display='none';
$("#etg").insertAfter("#parois");
$("#options").insertAfter("#etg");
   
    
}
else{
    p.style.display='block';
    pp.style.display='block';
    $("#proiss").insertAfter("#parois");
   
}
 
}
               </script>


                    

                    <div id="etg" class="form-group col-md-4">
                        <label for="etagere" class="control-label ">Etagère:</label>
            
                        <select class="form-control" name="etagere" id="etagere">
                            <option value="Avec">Avec</option>
                            <option value="Sans" selected>Sans</option>
                        </select>
                        </div>

                        <div id="nive"class="form-group col-md-4">
                        <label for="niveau" class="control-label " id="niveau">Niveau:</label>
                        <select class="form-control" name="niv" id="niv">
                            <option value="02">02</option>
                            <option value="03" >03</option>
                            <option value="04" >04</option>
                            <option value="05" >05</option>
                        </select>
                        </div>
          <div id="longu" class="form-group col-md-4">
                <label for="longueur" class="control-label " id="longueur">Longueur:</label>
                        <select class="form-control" name="long" id="long">
                            <option value="1000">1000 mm </option>
                            <option value="1500">1500 mm</option>
                        </select>
          </div>
            <div id="b1000" class="form-group col-md-4">
                        <label for="bac1000" class="control-label " id="bac1000">nombre de bac:</label>
                        <select class="form-control" name="bacs1000" id="bacs1000">
                            <option value="05">5 </option>
                            <option value="10">10</option>
                            <option value="15">15 </option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                        </select>
</div>
<div id="b1500" class="form-group col-md-4">

                        <label for="bac1500" class="control-label " id="bac1500">nombre de bac:</label>
                        <select class="form-control" name="bacs1500" id="bacs1500">
                            <option value="07">7 </option>
                            <option value="14">14</option>
                            <option value="21">21 </option>
                            <option value="28">28</option>
                            <option value="35">35</option>
                        </select>
        </div>

        <div id="options" class="form-group col-md-4">
        <script>
            $(document).ready(function () {
              
                //Select2
                $(".1").select2({
                    maximumSelectionLength: 2000000000000000,
                });

              
                
            });
        </script>
<label for="options" class="control-label " >Ajoutez d'autres Options</label>

<select class="1"  multiple="true"  style="width: 300px;" id="options" name="options[]" >
<?php 
                         
                              include('database.php');
                              $select=$bdd->query('SELECT nom FROM options');
                              while ($donnee=$select->fetch()) {
                                  $nom=$donnee['nom'];
                                  echo('<option>'.$nom.' </options>' );
                                  
                              }
                            
                           
                              
                            
                              
   ?>

       
</select>
</div>


  

                        <script type="text/javascript">




                        $(document).ready(function(){
                          $("#options").insertAfter("#etg");
                          
                        });
                        
var n = document.getElementById('niveau');
 var nn= document.getElementById('niv');
 var l = document.getElementById('longueur');
 var ll = document.getElementById('long');
 var b = document.getElementById('bac1000');
 var bb = document.getElementById('bacs1000');
 var b3 = document.getElementById('bac1500');
 var b4 = document.getElementById('bacs1500');
n.style.display='none';
    nn.style.display='none';
    l.style.display='none';
    ll.style.display='none';
    b.style.display='none';
    bb.style.display='none';
    b3.style.display='none';
    b4.style.display='none';
               var select= document.getElementsByTagName('select')[15];
                select.onchange = function(){
 
 var n = document.getElementById('niveau');
 var nn= document.getElementById('niv');
 var l = document.getElementById('longueur');
 var ll = document.getElementById('long');
 var b = document.getElementById('bac1000');
 var bb = document.getElementById('bacs1000');
 var b3 = document.getElementById('bac1500');
 var b4 = document.getElementById('bacs1500');
 

 

if(this.value =="Sans"){
    n.style.display='none';
    nn.style.display='none';
    l.style.display='none';
    ll.style.display='none';
    b.style.display='none';
    bb.style.display='none';
    b3.style.display='none';
    b4.style.display='none';
$("#options").insertAfter("#etg");

    
   
    
}
else{
    n.style.display='block';
    nn.style.display='block';
    l.style.display='block';
    ll.style.display='block';
    b.style.display='block';
    bb.style.display='block';
    b3.style.display='none';
    b4.style.display='none';
    $("#nive").insertAfter("#etg");
    $("#longu").insertAfter("#nive");
    $("#b1000").insertAfter("#longu");
    
}
 
}
             

 
               var select= document.getElementsByTagName('select')[17];
                select.onchange = function(){
 
 
 var b = document.getElementById('bac1000');
 var bb = document.getElementById('bacs1000');
 var b3 = document.getElementById('bac1500');
 var b4 = document.getElementById('bacs1500');
 

 

if(this.value =="1500"){
   
    b.style.display='none';
    bb.style.display='none';
    b3.style.display='block';
    b4.style.display='block';
    $("#b1500").insertAfter("#longu");
    $("#options").insertAfter("#b1500");
    
   
    
}
else{
    
    b.style.display='block';
    bb.style.display='block';
    b3.style.display='none';
    b4.style.display='none';
    $("#b1000").insertAfter("#longu");
    $("#options").insertAfter("#b1000");
}
 
}
               </script>




</div>
                   

                   
                   
                    <div class="bout" style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
    </div>
  </div>
  
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
  
</form>     





<script>



    
 

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }

  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Valider";
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  /*for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }*/
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

    </body>
</html>