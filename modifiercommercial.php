
        <?php 
session_start();
include('database.php');
try
{
$req = $bdd->query('SELECT * FROM registrecommercial  ORDER BY num DESC LIMIT 1');
    

	while ($infos = $req->fetch())
    {
 ?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleof.css">
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
      background-color: rgba(7, 56, 116, 0.7);/* changer la couleur de la barre de navigation*/
    }

</style>
</head>


<style>
* {
  box-sizing: border-box;
}


@media (max-width: 768px) {
  
  #regForm {
    
    background: rgba(255, 255, 255, 0.5);
    margin-right: auto;
    margin-left: 15%;
    font-family: Raleway;
    padding: 20px;
    width: 420px;
    display: block;
    height: 135vh; 
    background-size:cover;
  
  background-position:center;
  border-top-left-radius : 100px 70px;
    border-top-right-radius : 100px 70px;
    border-bottom-left-radius : 100px 70px;
    border-bottom-right-radius : 100px 70px;
  
  }
  body {
  background-color: #f1f1f1;
  background-image:url("LOGO-Kmobile.png");
  background-size:cover;
  
  background-position:center;
  
  height: 168vh; 
   
  
}
input {
  padding: 5px;
  width: 10px;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

  
  .bout {
  margin-top: 20px;
}
  
  .navbar-default{
      
    padding: 0px;
    min-width: 500px;
        
  }
  input.invalid {
  background-color: #ffdddd;
}
  
  
  }
  
@media (min-width: 768px) {
  
  #regForm {
    
    background: rgba(255, 255, 255, 0.5);
    
    margin-right: 100px;
    margin-left: 100px;
    font-family: Raleway;
    padding: 40px;
    min-width: 500px;


    height: 80vh; 
   
  
    border-top-left-radius : 100px 70px;
    border-top-right-radius : 100px 70px;
    border-bottom-left-radius : 100px 70px;
    border-bottom-right-radius : 100px 70px;
  
  
  
   
  }
  input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
  input.invalid {
  background-color: #ffdddd;
}
  body {
  background-color: #f1f1f1;
  background-image:url("LOGO-K.png");
  background-size:cover;
  
  background-position:center;
  
  
   
  
}
  .bout {
  margin-top: 340px;
}
  
 
  }


h1 {
  text-align: center;  
}



/* Mark input boxes that gets an error on validation: */


/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 5px 20px;
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
            <a class="navbar-brand" href="accueil.php"><span class="glyphicon glyphicon-home"></span> Accueil</a>
            
            
       
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">

<a style="float:right;" class="navbar-brand" href="LogOut.php"><span  class="glyphicon glyphicon-log-in "></span> Déconnexion</a>
</div>
                        
                        
        
    </nav>
<form id="regForm" action="modifiercommercialbd.php" method="post" >
  <h1>Commercial</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <legend class="text-center col-md-12"> Informations sur le véhicule</legend>
    
    
    <div class="form-group col-md-4">
                        <label for="numero" class="control-label ">Numéro d'offre:</label>
                        <!-- <input class="form-control" name="numero" id="numero" type="text"  required> -->
                        <input class="form-control" type="text" id="offre" name="offre" value="<?php echo $infos['noffre'];?>">

                           
                    </div>
                    
  
     <div class="form-group col-md-4">
                        <label for="cat" class="control-label ">Marque:</label>
                        
                        
                        <select class="form-control" name="marque" id="marque"  >
                          <option ><?php
                          echo $infos['marque'];
                          ?></option>  
                        <?php 
                         
                         include('database.php');
                        
                         $select=$bdd->query('SELECT marque FROM vehicule');
                         while ($donnee=$select->fetch()) {
                             $marque=$donnee['marque'];
                             
                             echo('<option >
                             '.$marque.' </options>'
                            
                           
                            
                            );
                            
                         }
                       
                      
                         
                       
                         
?>
                        </select>
                                                   
      </div>
       
      <div class="form-group col-md-4">
                        <label for="cat" class="control-label ">Modele:</label>
                        
                        
                        <select class="form-control" name="modele" id="modele" >>
                       
                          <option ><?php
                          echo $infos['modele'];
                          ?></option> 
                        <?php 
                         
                         include('database.php');
                         
                         $select=$bdd->query('SELECT modele FROM vehicule');
                         while ($donnee=$select->fetch()) {
                             $modele=$donnee['modele'];
                             echo('<option value='.$infos['modele'].'>
                             '.$modele.'
                             
                                              
                                              
                                              </options>' 
                                            
                                                    
                                            
                                            );
                                             
                         }
                       
                      
                         
                       
                         
?>
                        </select>
                                                   
      </div>


      <div class="form-group col-md-4" id="choice">
                        <label for="choix" class="control-label ">veuillez choisir:</label>
                        <select class="form-control" name="choix" id="choix" >
                        
                          <option ><?php
                          echo $infos['choix'];
                          ?></option> 
                            <option value="tronquage">tronquage</option>
                            <option value="plateforme">plateforme</option>
                            <option value="plateau">plateau</option>
                        </select>
                        
                           
                    </div> 

            <div class="form-group col-md-4" id="formplateau">
                        <label for="date" class="control-label ">Format:</label>
                        
                        <select class="form-control" name="formatplateau" id="formatplateau">
                          <option ><?php
                          echo $infos['format'];
                          ?></option> 
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>

                        </select>
            </div>

                        <div class="form-group col-md-4" id="formplateforme">
                        <label for="date" class="control-label ">Format:</label>
                        <select class="form-control" name="formatplateforme" id="formatplateforme">
                       
                          <option ><?php
                          echo $infos['format'];
                          ?></option> 
                            <option value="L1H1">L1H1</option> 
                            <option value="L1H2">L1H2</option>
                            <option value="L2H2">L2H2</option>
                            <option value="L3H2">L3H2</option>
                            
                        </select>
                        </div>

                        <div class="form-group col-md-4"id="formtronquage">
                        <label for="date" class="control-label ">Format:</label>
                        <select class="form-control" name="formattronquage" id="formattronquage">
                       
                          <option ><?php
                          echo $infos['format'];
                          ?></option> 
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
                        <input class="form-control" name="ptac" id="ptac" type="text" value="<?php echo $infos['ptac'];?>" required>
                           
                    </div>


                    <div class="form-group col-md-4">
                        <label for="salle" class="control-label ">Nombre de place en cabine:</label>
                        <input class="form-control" name="nbrplace" id="nbrplace"  value="<?php echo $infos['nbrplace'];?>" required >
                           
                    </div> 

                   
                   

                   
 </div>
  

  <div class="tab">
  <legend class="text-center col-md-12"> Informations sur la nacelle</legend>
          <form class="form-inline form-group">

           
            <div class="form-group col-md-4">
                        <label for="modelenacelle" class="control-label">Modele:</label>
                        <select class="form-control" name="modelenacelle" id="modelenacelle">
                        <option ><?php
                          echo $infos['modelnacelle'];
                          ?></option> 
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
                        <option>
                        <?php   echo $infos['panier'];      
?>
</option>
<option value="1P">1P </option>
<option value="2P">2P </option>
            </select>
                    </div>
                    <?php
if($infos['panier']=="2P"){
                    ?>
            <div class="form-group col-md-4" id="panierrotati">
                        <label for="panierrotatif" name="panierrota" class="control-label">Panier rotatif:</label>
                        <select class="form-control" name="panierrotatif" id="panierrotatif">
                        <option>  <?php
                        
                        echo $infos['panierrotatif'];
                        ?></options>
                          
                          <option value="OUI">OUI</option>
            <option value="NON" >NON</option>
                  </select> 


                    
                    </div>
                    <?php

                        }
                        ?>

                    
            <div class="form-group col-md-4" id="stabi">
                        <label for="stabilisateur" class="control-label ">stabilisateur:</label>
                        
                        <select class="form-control" name="stabil" id="stabil" >
                        <?php
                          


                          if($infos['panier']=="2P" ){
                            $infos['stabilisateur']="OUI";
                            echo('<option>  '.$infos['stabilisateur'].'</options>
                                             
                                                                                  
                                             ' );
                        }else {
                          ?>


                        <option> <?php
                        echo $infos['stabilisateur'];
                        ?>
                        </options>
                        <option value="OUI">  OUI </options>
                                          <option value="NON">  NON </options>         
                                          
                                         
<?php
                        }
                          ?>
                        </select>
            </div>
            <?php
if($infos['stabilisateur']=="OUI"){
                    ?>
            <div class="form-group col-md-4">
            <label for="stabilisa" class="control-label " id="stab">nombre de stabilisateur:</label>
           
            <select class="form-control" name="stabilisat" id="stabilisat" >
            <option selected>  <?php
                        
                        echo $infos['nbstabilisateur'];
                        ?></options>
                          
                          <option value="2">2</option>
            <option value="4" >4</option>
            </select>
            
                    </div>
                    <?php
    }
                    
                    ?>
                    

  </div>

<div class="tab">  
   <legend class="text-center col-md-12"> Informations sur les Equipements</legend>                        
                         <div id="plancher" class="form-group col-md-4">
                        <label for="plancher" class="control-label">Plancher:</label>
                        <select class="form-control" name="plancher" id="plancher">
                        <option value="<?php echo $infos['plancher'];?>">  <?php
                        
                        echo $infos['plancher'];
                        ?></options>
                          
                          <option value="Avec">Avec</option>
            <option value="Sans" >Sans</option>
                        </select>
                        </div>
                        <?php
if($infos['plancher']=="Avec"){
                        ?>
                        <div id="plancc" class="form-group col-md-4">
                        <label for="plan" class="control-label " id="plan">veuillez choisir:</label>

                        <select class="form-control" name="planch" id="planch">
                        <option value="<?php echo $infos['choixplancher'];?>">  <?php
                        
                        echo $infos['choixplancher'];
                        ?></options>
                          
                          <option value="Bois">Bois</option>
            <option value="Pvc" >Pvc</option>
                        </select>

                   </div>

                    <?php
}?>



                    

                    <div id="parois" class="form-group col-md-4">
                        <label for="parois" id="pa" class="control-label">Parois:</label>
                        
                        <select class="form-control" name="parois" id="parois">
                        <option>  <?php
                        
                        echo $infos['parois'];
                        ?></options>
                          
                          <option value="Avec">Avec</option>
            <option value="Sans" >Sans</option>
                        </select>
                    </div>


                    <?php
if($infos['parois']=="Avec"){                    ?>
                    <div  id="proiss" class="form-group col-md-4">
                        <label for="paroi" class="control-label " id="paroi">veuillez choisir:</label>

                        <select class="form-control" name="par" id="par">
                        <option >  <?php
                        
                        echo $infos['choixparois'];
                        ?></options>
                          
                          <option value="Bois">Bois</option>
            <option value="Pvc" >Pvc</option>
                        </select>

                   

                    </div>
<?php
}
?>


                    


                    

                    <div id="etg" class="form-group col-md-4">
                        <label for="etagere" class="control-label ">Etagère:</label>
            
                        <select class="form-control" name="etagere" id="etagere">
                        <option >  <?php
                        
                        echo $infos['etagere'];
                        ?></options>
                          
                          <option value="Avec">Avec</option>
            <option value="Sans" >Sans</option>
                        </select>
                        </div>
<?php

if($infos['etagere']=="Avec"){
?>
                        <div id="niv"class="form-group col-md-4">
                        <label for="niveau" class="control-label " id="niveau">Niveau:</label>
                        <select class="form-control" name="niv" id="niv">
                        <option selected><?php
                          echo $infos['nivetagere'];
                          ?></option> 
                            <option value="02">02</option>
                            <option value="03" >03</option>
                            <option value="04" >04</option>
                            <option value="05" >05</option>
                        </select>
                        </div>
          <div id="longu" class="form-group col-md-4">
                <label for="longueur" class="control-label " id="longueur">Longueur:</label>
                        <select class="form-control" name="long" id="long">
                        <option selected><?php
                          echo $infos['longetagere'];
                          ?></option> 
                            <option value="1000">1000 mm </option>
                            <option value="1500">1500 mm</option>
                        </select>
          </div>
          <?php
if($infos['longetagere']=="1000"){
          ?>
            <div id="b1000" class="form-group col-md-4">
                        <label for="bac1000" class="control-label " id="bac1000">nombre de bac:</label>
                        <select class="form-control" name="bacs1000" id="bacs1000">
                        <option ><?php
                          echo $infos['nbbac'];
                          ?></option> 
                            <option value="05">5 </option>
                            <option value="10">10</option>
                            <option value="15">15 </option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                        </select>
</div>
<?php
}else{

?>
<div id="b1500" class="form-group col-md-4">

                        <label for="bac1500" class="control-label " id="bac1500">nombre de bac:</label>
                        <select class="form-control" name="bacs1500" id="bacs1500">
                        <option ><?php
                          echo $infos['nbbac'];
                          ?></option> 
                            <option value="07">7 </option>
                            <option value="14">14</option>
                            <option value="21">21 </option>
                            <option value="28">28</option>
                            <option value="35">35</option>
                        </select>
        </div>
<?php
}

?>
<?php
}?>
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
<option selected><?php
 $optt=explode("," , $infos['options']);
echo $infos['options'];
?></options>
<?php 
                        
                              include('database.php');
                              $select=$bdd->query('SELECT nom FROM options');
                              while ($donnee=$select->fetch()) {
                                  $nom=$donnee['nom'];
                                  
                                  echo('
                                  <option>'.$nom.' </options>
                                  
                                  ' );
                              }
                            
                           
                              
                            
                              
   ?>

       
</select>
</div>

  

                        




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
<?php
    }
}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


?>
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